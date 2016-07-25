<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/25
 * Time: 15:06
 */

Class Team{
    public $pointGuard;
    public $shootingGuard;
    public $smallForward;
    public $powerForward;
    public $center;
    public $coach;

    /**
     * @return mixed
     */
    public function getPointGuard()
    {
        return $this->pointGuard;
    }

    /**
     * @param mixed $pointGuard
     */
    public function setPointGuard($pointGuard)
    {
        $this->pointGuard = $pointGuard;
    }

    /**
     * @return mixed
     */
    public function getShootingGuard()
    {
        return $this->shootingGuard;
    }

    /**
     * @param mixed $shootingGuard
     */
    public function setShootingGuard($shootingGuard)
    {
        $this->shootingGuard = $shootingGuard;
    }

    /**
     * @return mixed
     */
    public function getSmallForward()
    {
        return $this->smallForward;
    }

    /**
     * @param mixed $smallForward
     */
    public function setSmallForward($smallForward)
    {
        $this->smallForward = $smallForward;
    }

    /**
     * @return mixed
     */
    public function getPowerForward()
    {
        return $this->powerForward;
    }

    /**
     * @param mixed $powerForward
     */
    public function setPowerForward($powerForward)
    {
        $this->powerForward = $powerForward;
    }

    /**
     * @return mixed
     */
    public function getCenter()
    {
        return $this->center;
    }

    /**
     * @param mixed $center
     */
    public function setCenter($center)
    {
        $this->center = $center;
    }

    /**
     * @return mixed
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * @param mixed $coach
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;
    }



}