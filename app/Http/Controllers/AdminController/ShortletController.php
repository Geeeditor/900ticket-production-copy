<?php

namespace App\Http\Controllers\AdminController;

use App\Models\Shortlet;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShortletController extends Controller
{
    //

    public function index (Shortlet $shortlet) {
        $shortlet = Shortlet::latest()->get();
        return view ('admin.pages.900Shortlet.index', ['shortlet' => $shortlet]);
    }

    public function create () {
        return view ('admin.pages.900Shortlet.create');
    }

    public function store(Request $request, Shortlet $shortlet)
    {

        $data = $request->validate([
            'apartment_title' => ['required', 'max:225'],
            'address' => ['required', 'max:225'],
            'description' => ['required'],
            'bedrooms' => ['required', 'numeric'],
            'bathrooms' => ['required', 'numeric'],
            'max_guest' => ['required', 'numeric'],
            'apartment_type' => ['required|string'],
            'checking_option' => ['required', 'max:225'],
            'images' => ['required', 'array', 'max:2048', 'min:5'],
            'apartment_price' => ['numeric', 'between:0,999999.99'],
        ]);

        $admin = Auth::user(); // Get the authenticated user


        if ($admin->usertype === 'admin') {

            // Store the data in the Shortlet model
            // $shortlet = new Shortlet();
            // Save the Shortlet model

            $imageNames = [];

            foreach ($data['images'] as $image) {
                 $fileName = 'shortlet_' . Str::random(4) . substr(time(), 6, 8) . '.' . $image->getClientOriginalExtension();

                 Storage::disk('public')->put('/shortlet/' . $fileName, file_get_contents($image));
                 $imageNames[] = $fileName;
            }

            $shortlet = $admin->shortlet()->create([
                'apartment_title' => $data['apartment_title'],
                'address' => $data['address'],
                'description' => $data['description'],
                'bedrooms' => $data['bedrooms'],
                'bathrooms' => $data['bathrooms'],
                'max_guest' => $data['max_guest'],
                'apartment_type' => $data['apartment_type'],
                'checking_option' => $data['checking_option'],
                'apartment_price' => $data['apartment_price'],
                'user_id' => $admin->id, // Assign the authenticated user's id
                'images' => json_encode($imageNames)
            ]);

            // dd($imageNames);


           /*  {
                foreach ($data['images'] as $image) {
                    $fileName = 'shortlet_' . Str::random(4) . substr(time(), 6, 8) . '.' . $image->getClientOriginalExtension();
                    Storage::disk('public')->put('/shortlet/' . $fileName, file_get_contents($image));
                    $imageNames[] = $fileName;
                }

                // Serialize the array of image names before storing in the database
                $shortlet->images = serialize($imageNames);
                $shortlet->save();
            }*/


            // dd('Data saved to the Shortlet table with image names and associated with the authenticated user');

            return redirect()->back()->with('success', 'Shortlet Listing created successfully');


        } else {
            // If the user is not an admin, you can redirect them back or show an error message
            return redirect()->back()->with('error', 'Oops! You do not have permission to create a shortlet');
        }
    }


    public function edit(Shortlet $shortlet, $id) {
        $shortlet = Shortlet::find($id);

        if ($shortlet) {
            return view('admin.pages.900Shortlet.edit', ['shortlet' => $shortlet]);
        }

        return  '404';
    }

    public function update(Request $request, $id) {
       $data = $request->validate([
        'apartment_title' => ['required', 'max:225'],
        'address' => ['required', 'max:225'],
        'description' => ['required'],
        'bedrooms' => ['numeric'],
        'bathrooms' => ['numeric'],
        'max_guest' => ['numeric'],
        'apartment_type' => 'required',
        'checking_option' => ['required', 'max:225'],
        'deleted_image' => ['array', 'nullable'],
        'images' => ['array', 'nullable'],
        'apartment_availability' => ['boolean'],
        // 'images' => ['required', 'array', 'max:2048', 'min:5'],
        'apartment_price' => ['numeric', 'between:0,999999.99'],
           /*  'new_images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048', // Validation for new images
            'deleted_images.*' => 'string', // Validation for deleted images */
        ]);

        $admin = Auth::user(); // Get the authenticated user

        $shortlet = Shortlet::findOrFail($id);
        // $images = []

        $imageUpload = isset($data['images']) ? $data['images'] : null;


        // Handle image deletion

        if ($request->has('deleted_image') && $imageUpload !== null) {
            $deletedImage = $request->input('deleted_image');
            $databaseImage = json_decode($shortlet->images);

            $newImage[] = $data['images'];

            foreach($request->file('images') as $image) {
                $fileName = 'shortlet_' .  Str::random(4) . substr(time(), 6, 8) . $image->getClientOriginalExtension();
                Storage::disk('public')->put('/shortlet/' . $fileName, file_get_contents($image));
                $images[] = $fileName;
            }

            $imageDifference = array_diff($databaseImage,$deletedImage);

            $updatedImageData = array_merge($imageDifference, $images);

            $shortletData = [
                'address' => $request->input('address') ? $data['address'] : $shortlet->address,
                'apartment_title' => $request->input('apartment_title') ? $data['apartment_title'] : $shortlet->apartment_title,
                'description' => $request->input('description') ? $data['description'] : $shortlet->description,
                'bedrooms' => $request->input('bedrooms') ? $data['bedrooms'] : $shortlet->bedrooms,
                'bathrooms' => $request->input('bathrooms') ? $data['bathrooms'] : $shortlet->bathrooms,
                'max_guest' => $request->input('max_guest') ? $data['max_guest'] : $shortlet->max_guest,
                'apartment_type' => $request->input('apartment_type') ? $data['apartment_type'] : $shortlet->apartment_type,
                'checking_option' => $request->input('checking_option') ? $data['checking_option'] : $shortlet->checking_option,
                'apartment_price' => $request->input('apartment_price') ? $data['apartment_price'] : $shortlet->apartment_price,
                // 'user_id' => $admin->,
                'apartment_availability' => $data['apartment_availability'] ? $data['apartment_availability'] : $shortlet->apartment_availability,
                'images' => json_encode($updatedImageData)

            ];

            $shortlet->update($shortletData);

            // dd('Database update success');
            return redirect()->back()->with('success', 'Shortlet listing updated successfully');

            /*
                echo 'You uploaded and delete image find them below';

                echo '<pre>';
                print_r([$updatedImageData]);
                echo '</pre>';


                echo 'The following are staged for deletion';

                echo '<pre>';
                print_r([$deletedImage]);
                echo '</pre>';

                 foreach ($deletedImages as $deletedImage) {
                $key = array_search($deletedImage, $images);
                if ($key !== false) {
                    unset($images[$key]);
                }
            }

            $shortlet->images = array_values($images); */


        } elseif (!$request->has('deleted_image') &&$imageUpload !== null) {
            $newImage[] = $data['images'];

            foreach($request->file('images') as $image) {
                $fileName = 'shortlet_' .  Str::random(4) . substr(time(), 6, 8) . $image->getClientOriginalExtension();
                Storage::disk('public')->put('/shortlet/' . $fileName, file_get_contents($image));
                $images[] = $fileName;
            }

            $shortletData = [
                'address' => $request->input('address') ? $data['address'] : $shortlet->address,
                'apartment_title' => $request->input('apartment_title') ? $data['apartment_title'] : $shortlet->apartment_title,
                'description' => $request->input('description') ? $data['description'] : $shortlet->description,
                'bedrooms' => $request->input('bedrooms') ? $data['bedrooms'] : $shortlet->bedrooms,
                'bathrooms' => $request->input('bathrooms') ? $data['bathrooms'] : $shortlet->bathrooms,
                'max_guest' => $request->input('max_guest') ? $data['max_guest'] : $shortlet->max_guest,
                'apartment_type' => $request->input('apartment_type') ? $data['apartment_type'] : $shortlet->apartment_type,
                'checking_option' => $request->input('checking_option') ? $data['checking_option'] : $shortlet->checking_option,
                'apartment_price' => $request->input('apartment_price') ? $data['apartment_price'] : $shortlet->apartment_price,
                // 'user_id' => $admin->,
                'apartment_availability' => $data['apartment_availability'] ? $data['apartment_availability'] : $shortlet->apartment_availability,
                'images' => json_encode($images)

            ];

            $shortlet->update($shortletData);

            // dd('Database update success');
            return redirect()->back()->with('success', 'Shortlet listing updated successfully');

        }  elseif ($request->has('deleted_image') &&$imageUpload == null) {
            $deletedImage = $request->input('deleted_image');
            $databaseImage = json_decode($shortlet->images);

            $imageDifference = array_diff($databaseImage,$deletedImage);

            // $newImage[] = $data['images'];

            $shortletData = [
                'address' => $request->input('address') ? $data['address'] : $shortlet->address,
                'apartment_title' => $request->input('apartment_title') ? $data['apartment_title'] : $shortlet->apartment_title,
                'description' => $request->input('description') ? $data['description'] : $shortlet->description,
                'bedrooms' => $request->input('bedrooms') ? $data['bedrooms'] : $shortlet->bedrooms,
                'bathrooms' => $request->input('bathrooms') ? $data['bathrooms'] : $shortlet->bathrooms,
                'max_guest' => $request->input('max_guest') ? $data['max_guest'] : $shortlet->max_guest,
                'apartment_type' => $request->input('apartment_type') ? $data['apartment_type'] : $shortlet->apartment_type,
                'checking_option' => $request->input('checking_option') ? $data['checking_option'] : $shortlet->checking_option,
                'apartment_price' => $request->input('apartment_price') ? $data['apartment_price'] : $shortlet->apartment_price,
                // 'user_id' => $admin->,
                'apartment_availability' => $data['apartment_availability'] ? $data['apartment_availability'] : $shortlet->apartment_availability,
                'images' => json_encode($imageDifference)

            ];



            $shortlet->update($shortletData);

            // dd('Database update success');
            return redirect()->back()->with('success', 'Shortlet listing updated successfully');
        } elseif (!$request->has('deleted_image') &&$imageUpload == null) {
            $shortletData = [
                'address' => $request->input('address') ? $data['address'] : $shortlet->address,
                'apartment_title' => $request->input('apartment_title') ? $data['apartment_title'] : $shortlet->apartment_title,
                'description' => $request->input('description') ? $data['description'] : $shortlet->description,
                'bedrooms' => $request->input('bedrooms') ? $data['bedrooms'] : $shortlet->bedrooms,
                'bathrooms' => $request->input('bathrooms') ? $data['bathrooms'] : $shortlet->bathrooms,
                'max_guest' => $request->input('max_guest') ? $data['max_guest'] : $shortlet->max_guest,
                'apartment_type' => $request->input('apartment_type') ? $data['apartment_type'] : $shortlet->apartment_type,
                'checking_option' => $request->input('checking_option') ? $data['checking_option'] : $shortlet->checking_option,
                'apartment_price' => $request->input('apartment_price') ? $data['apartment_price'] : $shortlet->apartment_price,
                // 'user_id' => $admin->,
                'apartment_availability' => $data['apartment_availability'] ? $data['apartment_availability'] : $shortlet->apartment_availability,
                'images' => $shortlet->images

            ];

            $shortlet->update($shortletData);

            // dd('Database update success');
            return redirect()->back()->with('success', 'Shortlet listing updated successfully');
        } else {
            return redirect()->back()->with('error', 'Shortlet listing update was unsuccessfull please confirm if you have permission to perform this action');
        }
    }

    public function updateError(Request $request, $id)
{
    $data = $request->validate([
        'apartment_title' => ['required', 'max:225'],
        'address' => ['required', 'max:225'],
        'description' => ['required'],
        'bedrooms' => ['numeric'],
        'bathrooms' => ['numeric'],
        'max_guest' => ['numeric'],
        'apartment_type' => 'required',
        'checking_option' => ['required', 'max:225'],
        'deleted_image' => ['array', 'nullable'],
        'images' => ['array', 'nullable'],
        'apartment_availability' => ['boolean'],
        'apartment_price' => ['numeric', 'between:0,999999.99'],
    ]);

    $admin = Auth::user();
    $shortlet = Shortlet::findOrFail($id);
    $images = [];

    if ($request->has('deleted_image') && $request->has('images')) {
        $deletedImage = $request->input('deleted_image');
        $databaseImage = json_decode($shortlet->images);

        foreach ($request->file('images') as $image) {
            $fileName = 'shortlet_' . Str::random(4) . substr(time(), 6, 8) . $image->getClientOriginalExtension();
            Storage::disk('public')->put('/shortlet/' . $fileName, file_get_contents($image));
            $images[] = $fileName;
        }

        $imageDifference = array_diff($databaseImage, $deletedImage);
        $updatedImageData = array_merge($imageDifference, $images);
    }

    $shortletData = [
        'address' => $data['address'] ?? $shortlet->address,
        'apartment_title' => $data['apartment_title'] ?? $shortlet->apartment_title,
        'description' => $data['description'] ?? $shortlet->description,
        'bedrooms' => $data['bedrooms'] ?? $shortlet->bedrooms,
        'bathrooms' => $data['bathrooms'] ?? $shortlet->bathrooms,
        'max_guest' => $data['max_guest'] ?? $shortlet->max_guest,
        'apartment_type' => $data['apartment_type'] ?? $shortlet->apartment_type,
        'checking_option' => $data['checking_option'] ?? $shortlet->checking_option,
        'apartment_price' => $data['apartment_price'] ?? $shortlet->apartment_price,
        'apartment_availability' => $data['apartment_availability'] ?? $shortlet->apartment_availability,
        'images' => isset($updatedImageData) ? json_encode($updatedImageData) : $shortlet->images,
    ];

    $shortlet->update($shortletData);

    return redirect()->back()->with('success', 'Shortlet listing updated successfully');
}

    public function destroy (Request $request, $id) {
        if (Auth::user()->usertype == 'admin') {
            $shortlet = Shortlet::findOrFail($id);
            $shortlet->delete();
            return redirect()->back()->with('success', 'Shortlet deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Oops! You do not have permission to delete shortlet');
        }
    }


}
