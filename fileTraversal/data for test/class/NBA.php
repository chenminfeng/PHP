<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/25
 * Time: 15:06
 */
Class NBA{
    public $teamFromEast;
    public $teamFromWest;
    public $mvp;

    /**
     * @return mixed
     */
    public function getTeamFromEast()
    {
        return $this->teamFromEast;
    }

    /**
     * @param mixed $teamFromEast
     */
    public function setTeamFromEast($teamFromEast)
    {
        $this->teamFromEast = $teamFromEast;
    }

    /**
     * @return mixed
     */
    public function getTeamFromWest()
    {
        return $this->teamFromWest;
    }

    /**
     * @param mixed $teamFromWest
     */
    public function setTeamFromWest($teamFromWest)
    {
        $this->teamFromWest = $teamFromWest;
    }

    /**
     * @return mixed
     */
    public function getMvp()
    {
        return $this->mvp;
    }

    /**
     * @param mixed $mvp
     */
    public function setMvp($mvp)
    {
        $this->mvp = $mvp;
    }




}