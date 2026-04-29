<?php

class QrContact {
    private $name;
    private $qrImage;
    private $lineImage;
    private $lineId;
    private $phone;

    public function __construct($name, $qrImage, $lineImage, $lineId, $phone) {
        $this->name = $name;
        $this->qrImage = $qrImage;
        $this->lineImage = $lineImage;
        $this->lineId = $lineId;
        $this->phone = $phone;
    }

    public function getName() {
        return $this->name;
    }

    public function getQrImage() {
        return $this->qrImage;
    }

    public function getLineImage() {
        return $this->lineImage;
    }

    public function getLineId() {
        return $this->lineId;
    }

    public function getPhone() {
        return $this->phone;
    }
}

class QrManager {
    private $contacts = [];

    public function __construct() {
        $this->contacts = [
            new QrContact("Chayada (Tip)","assets/images/qrcode/qr-chayada-tip.webp", "assets/images/icons/line.webp", "tipsnowbeef", "098-334-6983"),
            new QrContact("Pattarasaya (Apple)","assets/images/qrcode/qr-pattarasaya-apple.webp", "assets/images/icons/line.webp", "apple_snowbeef", "094-669-2863"),
            new QrContact("Salisa (YuMi)","assets/images/qrcode/qr-sarlisa-yumi.webp", "assets/images/icons/line.webp", "mna1234", "097-156-7635"),
        ];
    }

    public function getAllContacts() {
        return $this->contacts;
    }
}
?>