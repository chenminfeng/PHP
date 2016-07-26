<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/26
 * Time: 15:27
 */

/**
 * Class File 记录文件的各个属性
 */
Class File{
    public $name;
    public $modifyTime;
    public $isDir;
    public $size;

    public $blankNumber;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getModifyTime()
    {
        return $this->modifyTime;
    }

    /**
     * @param mixed $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->modifyTime = $modifyTime;
    }

    /**
     * @return mixed
     */
    public function getIsDir()
    {
        return $this->isDir;
    }

    /**
     * @param mixed $isDir
     */
    public function setIsDir($isDir)
    {
        $this->isDir = $isDir;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getBlankNumber()
    {
        return $this->blankNumber;
    }

    /**
     * @param mixed $blankNumber
     */
    public function setBlankNumber($blankNumber)
    {
        $this->blankNumber = $blankNumber;
    }



}