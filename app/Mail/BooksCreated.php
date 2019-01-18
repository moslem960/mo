<?php

namespace App\Mail;

use App\books;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BooksCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $books;

    /**
     * Create a new message instance.
     *
     * @param books $books
     */
    public function __construct(books $books)
    {
        //
        $this->books=$books;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.books.created');
    }
}
