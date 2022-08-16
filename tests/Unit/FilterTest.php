<?php

namespace Tests\Unit;

use App\Book;
use Tests\TestCase;

class SearchableListFactoryTest extends TestCase
{
    public function test_filter_by()
    {
        factory(Book::class, 10)->states('new-york')->create();
        factory(Book::class, 10)->states('barcelona')->create();
        $books = Book::filterBy(['title' => 'New-York'])->get();

        $this->assertTrue($books->count() === 10 && Book::count() === 20);
    }
}
