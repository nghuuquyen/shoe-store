<?php

namespace Tests\Browser\Pages;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Throwable;

class ContactFormTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test the contact form submission with valid data.
     *
     * @return void
     * @throws Throwable
     */
    public function test_contact_form_submission()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact') // Visit the contact page
            ->assertSee('Contact') // Verify the page has the word 'Contact'
            ->type('name', 'John Doe') // Fill the name field
            ->type('email', 'johndoe@example.com') // Fill the email field
            ->type('message', 'This is a test message.') // Fill the message field
            ->press('Send') // Press the submitted button
            ->assertPathIs('/contact') // Verify we are still on the contact page
            ->assertSee('Contact submitted successfully!'); // Verify a success message

            // Verify that the contact record is in the database
            $this->assertDatabaseHas('contacts', [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'message' => 'This is a test message.',
            ]);
        });
    }

    /**
     * Test the contact form submission with missing required fields.
     *
     * @return void
     * @throws Throwable
     */
    public function test_contact_form_validation_errors()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact') // Visit the contact page
            ->press('Send') // Submit the form without filling fields
            ->assertSee('The name field is required.') // Verify name validation error
            ->assertSee('The email field is required.') // Verify email validation error
            ->assertSee('The message field is required.'); // Verify message validation error
        });
    }
}
