<?php

/**
 * PH34 BMI宿題
 *
 * @author Ayumu Ishida
 *
 * ファイル名=calcBMI.php
 * フォルダ=/ph34/practice01/calcBMI.php
 */
class BMI
{
    /**
     * @var string 名前。
     */
    private string $name = "";
    /**
     * @var int 身長
     */
    private int $height = 0;
    /**
     * @var int 体重
     */
    private int $weight = 0;

    /**
     * [各値の素材生成]
     * 
     * @param string 名前。
     * @param int 身長
     * @param int 体重
     * 
     */
    public function setData(string $name, int $weight, int $height): void //1人目
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getHeight(): string
    {
        return $this->height;
    }
    public function getWeight(): string
    {
        return $this->weight;
    }
    /**
     * [BMI演算]
     */
    public function getBMI()
    {
        $height = $this->height / 100; //身長(cm)の単位をmlに直す
        $bmi = $this->weight / ($height * $height); //bmi計算
        return $bmi = round($bmi, 1);
    }
    /**
     * [理想体重演算]
     */
    public function getIdeaIWeight()
    {
        $height = $this->height / 100; //身長(cm)の単位をmlに直
        $IdealWeight = ($height * $height) * 22;
        return $IdealWeight = Intval($IdealWeight); //整数変換
    }
    /**
     * [体重からのコメント]
     */
    public function getAdvice()
    {
        if ($this->getBMI() >= 25) {
            return $message = '太りすぎです';
        } elseif ($this->getBMI() >= 18.5 and $this->getBMI() < 25) {
            return $message = 'ちょうどいいです';
        } elseif ($this->getBMI() < 18.4) {
            return $message = '痩せすぎです';
        }
    }
}
