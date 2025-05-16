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

    public function index () {
        return view ('pages.admin.900Shortlet.create');
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
            'bedrooms' => ['numeric'],
            'bathrooms' => ['numeric'],
            'max_guest' => ['numeric'],
            'apartment_type' => 'required',
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

    public function update() {
        return view ('admin.pages.900Shortlet.update');
    }

    public function updateShortlet(Request $request, $id)
    {
        $request->validate([
            'apartment_title' => 'required|string|max:255',
            'apartment_availability' => 'required|boolean',
            'new_images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048', // Validation for new images
            'deleted_images.*' => 'string', // Validation for deleted images
        ]);

        $shortlet = Shortlet::findOrFail($id);

        // Handle image deletion
        if ($request->has('deleted_images') && is_array($shortlet->images)) {
            $deletedImages = $request->input('deleted_images');
            $images = $shortlet->images;

            foreach ($deletedImages as $deletedImage) {
                $key = array_search($deletedImage, $images);
                if ($key !== false) {
                    unset($images[$key]);
                }
            }

            $shortlet->images = array_values($images);
        }

        // Handle new image uploads
        if ($request->hasFile('new_images')) {
            $imageNames = [];

            foreach ($request->file('new_images') as $image) {
                $fileName = 'shortlet_' . Str::random(4) . substr(time(), 6, 8) . '.' . $image->getClientOriginalExtension();
                Storage::disk('public')->put('/shortlet/' . $fileName, file_get_contents($image));
                $imageNames[] = $fileName;
            }

            // Merge new image names with existing images
            $shortlet->images = array_merge($shortlet->images, $imageNames);
        }

        // Update other fields
        $shortlet->apartment_title = $request->input('apartment_title');
        $shortlet->apartment_availability = $request->input('apartment_availability');
        // Update other fields as needed

        $shortlet->save();

        return redirect()->back()->with('success', 'Shortlet listing updated successfully');
    }
}
