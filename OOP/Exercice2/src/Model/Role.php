<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/25/2019
 * Time: 2:26 PM
 */

namespace Model;


class Role
{
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    private $id;
    protected $label;


    public function __construct(string $label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
//    public function setLabel(string $label): Role
    public function setLabel(string $label): void
    {
        $this->label = $label;
        return $this;
    }


}