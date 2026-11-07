<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About Us - Kagzi Ventures',
        ];

        return view('about', $data);
    }

    public function appDevelopment()
    {
        $data = [
            'title'           => 'Android App, Mobile & Software Development Services in Indore - Kagzi Ventures',
            'metaDescription' => 'Kagzi Ventures, Indore offers Android app development, mobile app development and custom software application development services for businesses. Contact us for a free consultation.',
            'metaKeywords'    => 'Android app development Indore, mobile app development, software development company Indore, custom software, web application development, Kagzi Ventures',
        ];

        return view('app-development', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us - Kagzi Ventures',
        ];

        return view('contact', $data);
    }

    public function privacyPolicy()
    {
        $data = [
            'title' => 'Privacy Policy - Kagzi Ventures',
        ];

        return view('privacy-policy', $data);
    }

    public function kidsFlashcardsPrivacy()
    {
        $data = [
            'title'           => 'Privacy Policy - Kids Learning Flashcards (Android App) - Kagzi Ventures',
            'metaDescription' => 'Privacy Policy for the Kids Learning Flashcards Android app (com.kids.kidsflashcard) by Kagzi Ventures, Indore. The app collects no personal data, has no ads and complies with COPPA and Google Play Families Policy.',
            'metaKeywords'    => 'Kids Learning Flashcards privacy policy, com.kids.kidsflashcard, Kagzi Ventures, COPPA, Google Play Families',
        ];

        return view('kids-flashcards-privacy', $data);
    }

    public function terms()
    {
        $data = [
            'title' => 'Terms & Conditions - Kagzi Ventures',
        ];

        return view('terms-conditions', $data);
    }

    public function sendContact()
    {
        $name    = trim($this->request->getPost('name'));
        $email   = trim($this->request->getPost('email'));
        $phone   = trim($this->request->getPost('phone'));
        $subject = trim($this->request->getPost('subject')) ?: 'General Enquiry';
        $message = trim($this->request->getPost('message'));

        $text = "*New Enquiry - Kagzi Ventures*\n\n"
              . "*Name:* " . $name . "\n"
              . "*Email:* " . $email . "\n"
              . (!empty($phone) ? "*Phone:* " . $phone . "\n" : "")
              . "*Subject:* " . $subject . "\n\n"
              . "*Message:*\n" . $message;

        $whatsappUrl = "https://wa.me/919753875213?text=" . urlencode($text);

        return redirect()->to($whatsappUrl);
    }
}
