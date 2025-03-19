<?php
namespace APP\Config;

use APP\Action\Admin\BookAdd;
use APP\Action\Admin\BookDelete;
use APP\Action\Admin\BookUpdate;
use APP\Action\Author;
use APP\Action\Authors;
use APP\Action\Book;
use APP\Action\Books;
use APP\Action\Index;

class Routes
{
    public static function getConfig(): array
    {
        return [
            [
                '',
	            [Index::class, 'index']
            ]
        ];
    }
}