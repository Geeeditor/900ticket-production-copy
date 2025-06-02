@extends('layouts.app')
@section('title', 'Transaction History')

@section('hero')
    <div class="relative top-0 flex h-[14vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- Hero content can be added here --}}
    </div>
@endsection

@section('content')
    <section class="bg-white py-6">
        <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4 text-gray-800">Privacy Policy</h1>
            <p class="mb-4 text-gray-700">Your privacy is important to us. This Privacy Policy outlines how we collect, use, and protect your information.</p>
        
            <h2 class="text-xl font-semibold mt-6 mb-2 text-gray-800">Information We Collect</h2>
            <p class="mb-4 text-gray-700">We may collect the following types of information:</p>
            <ul class="list-disc list-inside mb-4 text-gray-700">
                <li>Personal Information: Such as your name, email address, and contact details.</li>
                <li>Usage Data: Information about how you use our services, including your IP address and browser type.</li>
                <li>Cookies: Small files stored on your device to enhance your experience.</li>
            </ul>
        
            <h2 class="text-xl font-semibold mt-6 mb-2 text-gray-800">How We Use Your Information</h2>
            <p class="mb-4 text-gray-700">We use your information for various purposes, including:</p>
            <ul class="list-disc list-inside mb-4 text-gray-700">
                <li>To provide and maintain our services.</li>
                <li>To notify you about changes to our services.</li>
                <li>To provide customer support and respond to inquiries.</li>
                <li>To gather analysis or valuable information so we can improve our services.</li>
            </ul>
        
            <h2 class="text-xl font-semibold mt-6 mb-2 text-gray-800">Data Security</h2>
            <p class="mb-4 text-gray-700">We take the security of your data seriously. We use appropriate technical and organizational measures to protect your information from unauthorized access, alteration, disclosure, or destruction.</p>
        
            <h2 class="text-xl font-semibold mt-6 mb-2 text-gray-800">Your Rights</h2>
            <p class="mb-4 text-gray-700">You have the right to:</p>
            <ul class="list-disc list-inside mb-4 text-gray-700">
                <li>Access the personal information we hold about you.</li>
                <li>Request corrections to any inaccuracies in your data.</li>
                <li>Request the deletion of your personal information.</li>
            </ul>
        
            <h2 class="text-xl font-semibold mt-6 mb-2 text-gray-800">Changes to This Privacy Policy</h2>
            <p class="mb-4 text-gray-700">We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
        
            <h2 class="text-xl font-semibold mt-6 mb-2 text-gray-800">Contact Us</h2>
            <p class="mb-4 text-gray-700">If you have any questions about this Privacy Policy, please contact us:</p>
            <p class="mb-4 text-gray-700"><strong>Email:</strong> support@example.com</p>
            
            <p class="text-gray-700">Thank you for trusting us with your information!</p>
        </div>
    </section>
@endsection