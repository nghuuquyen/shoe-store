<?php

namespace Tests\Feature;

use App\Events\ContactCreated;
use App\Jobs\SendContactEmail;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * Test the contact form submission with valid data.
     */
    public function test_contact_submission_with_valid_data()
    {
        // Fake the event and queue for testing
        Event::fake();
        Queue::fake();

        // Valid contact data
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'message' => 'This is a test message.',
        ];

        // Submit the form using POST request
        $response = $this->post(route('contact.submit'), $data);

        // Assert the contact was stored in the database
        $this->assertDatabaseHas('contacts', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'message' => 'This is a test message.',
        ]);

        // Assert the response redirects back with a success message
        $response->assertRedirect()
            ->assertSessionHas('success', 'Contact submitted successfully!');

        // Assert that the job was dispatched
        Queue::assertPushed(SendContactEmail::class, function ($job) use ($data) {
            return $job->contact->name === $data['name']
                && $job->contact->email === $data['email'];
        });

        // Assert that the ContactCreated event was fired
        Event::assertDispatched(ContactCreated::class);
    }

    /**
     * Test the contact form submission with missing required fields.
     */
    public function test_contact_submission_with_invalid_data()
    {
        // Missing 'name', 'email', and 'message'
        $response = $this->post(route('contact.submit'));

        // Assert validation errors for the required fields
        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }
}
