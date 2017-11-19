<?php

use Illuminate\Database\Seeder;
use App\Models\Lection;
use Carbon\Carbon;

class LectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lection::create([
            'title' => 'Painless Billing With Laravel and Stripe',
            'description' => 'Want to apply a subscription model to your web app, just like Laracasts? Let me show you how painless the process can be, using Stripe and Laravel Cashier.',
            'url' => 'https://www.youtube.com/embed/k9KKjxEq0Lg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Multiple Authentication in Laravel 5.4 Natively! (Admins + Users) - Part 1',
            'description' => 'This isn\'t documented very well in the Laravel documentation, so it is frustrating to find the correct way to do this. But I am happy that I have now put this tutorial series together to explain how to make this happen. It is a powerful feature that Laravel has and I\'m excited to show everyone how to use it.',
            'url' => 'https://www.youtube.com/embed/iKRLrJXNN4M',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Laravel custom login and redirects for multiple roles',
            'description' => 'We created a custom login system , and customized it for different roles in the application.',
            'url' => 'https://www.youtube.com/embed/xjLLr4WQWzw',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 4 (Laravel Echo)',
            'description' => 'I have a functional chat app connected to the server, but I have to refresh to see new messages from other people. This step involves setting up Event Broadcasting within Laravel and implementing Laravel Echo on the front end using Pusher.',
            'url' => 'https://www.youtube.com/embed/iiBcOKYxd0Q',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Lection::create([
            'title' => 'Building Realtime Chat with Laravel 5.4 and VueJS: Part 3 (Laravel Backend)',
            'description' => 'Now I am POSTing chat messages to the server and start loading messages from the server. It\'s basic Laravel models and routes in this video.',
            'url' => 'https://www.youtube.com/embed/8aTfMHg3V1Q&t=313s',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
