<?php

namespace App\Observers;

use App\Models\Section_Book;

class Section_BookObserver
{
    /**
     * Handle the section_ book "created" event.
     *
     * @param \App\Section_Book $sectionBook
     * @return void
     */
    public function creating(Section_Book $sectionBook)
    {
        Section_Book::where('id_book', $sectionBook->id_book)
            ->delete();
    }

    public function created(Section_Book $sectionBook)
    {
        //
    }

    /**
     * Handle the section_ book "updated" event.
     *
     * @param \App\Section_Book $sectionBook
     * @return void
     */
    public function updated(Section_Book $sectionBook)
    {
        //
    }

    /**
     * Handle the section_ book "deleted" event.
     *
     * @param \App\Section_Book $sectionBook
     * @return void
     */
    public function deleted(Section_Book $sectionBook)
    {
        //
    }

    /**
     * Handle the section_ book "restored" event.
     *
     * @param \App\Section_Book $sectionBook
     * @return void
     */
    public function restored(Section_Book $sectionBook)
    {
        //
    }

    /**
     * Handle the section_ book "force deleted" event.
     *
     * @param \App\Section_Book $sectionBook
     * @return void
     */
    public function forceDeleted(Section_Book $sectionBook)
    {
        //
    }
}
