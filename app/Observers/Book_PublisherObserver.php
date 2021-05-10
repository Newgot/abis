<?php

namespace App\Observers;

use App\Models\Book_Publisher;

class Book_PublisherObserver
{
    /**
     * Handle the book publisher "created" event.
     *
     * @param  \App\Book_Publisher  $bookPublisher
     * @return void
     */
    public function creating(Book_Publisher $bookPublisher)
    {
        $id_book = $bookPublisher->id_book;
        Book_Publisher::where('id_book', $id_book)
            ->delete();
    }

    public function created(Book_Publisher $bookPublisher)
    {
        //
    }

    /**
     * Handle the book publisher "updated" event.
     *
     * @param  \App\Book_Publisher  $bookPublisher
     * @return void
     */
    public function updated(Book_Publisher $bookPublisher)
    {
        //
    }
    /**
     * Handle the book publisher "deleted" event.
     *
     * @param  \App\BookPublisher  $bookPublisher
     * @return void
     */
    public function deleted(BookPublisher $bookPublisher)
    {
        //
    }

    /**
     * Handle the book publisher "restored" event.
     *
     * @param  \App\BookPublisher  $bookPublisher
     * @return void
     */
    public function restored(BookPublisher $bookPublisher)
    {
        //
    }

    /**
     * Handle the book publisher "force deleted" event.
     *
     * @param  \App\BookPublisher  $bookPublisher
     * @return void
     */
    public function forceDeleted(BookPublisher $bookPublisher)
    {
        //
    }
}
