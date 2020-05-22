<?php


namespace App\Form;
use App\Controller\StatisticMethod;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

use Symfony\Component\Validator\Exception\InvalidArgumentException;


class ScreenNameConstraint extends Constraint
{
    public $message = 'Your screen name not exist in VK data base';
    const TOKEN = 'ffcd47a61fb7d059a3adcf25313e6195863f9e59b7b172211ffea3a7d3b9f180fc2d11c96c45488737b5c';
    public $allowNull = false;
    public $normalizer;

    public function __construct($options = null)
    {
        $vkapi = new StatisticMethod();
        parent::__construct($options);

        if ($vkapi->getUserInfo($this->normalizer,self::TOKEN) == null) {
            throw new InvalidArgumentException(sprintf("bla vla"));
        }
    }


}