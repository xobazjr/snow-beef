<?php

class QrContact {
    private $qrImage;
    private $lineImage;
    private $lineId;
    private $phone;

    public function __construct($qrImage, $lineImage, $lineId, $phone) {
        $this->qrImage = $qrImage;
        $this->lineImage = $lineImage;
        $this->lineId = $lineId;
        $this->phone = $phone;
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
            new QrContact("assets/images/qrcode/qrcode.png", "assets/images/line.png", "tipsnowbeef", "098-334-6983"),
            new QrContact("assets/images/qrcode/qrcode.png", "assets/images/line.png", "tipsnowbeef", "098-334-6983"),
            new QrContact("assets/images/qrcode/qrcode.png", "assets/images/line.png", "tipsnowbeef", "098-334-6983"),
            new QrContact("assets/images/qrcode/qrcode.png", "assets/images/line.png", "tipsnowbeef", "098-334-6983")
        ];
    }

    public function getAllContacts() {
        return $this->contacts;
    }
}
?>