<?php
namespace trans;

use Transliterator;

class Client
{
    /**
     * @var Transliterator
     */
    protected $trans = null;
    function __construct($id)
    {
        $this->trans = (Transliterator::create('Any-Latin'));
    }

    public function trans($string)
    {
        return $this->trans->transliterate($string);
    }
}