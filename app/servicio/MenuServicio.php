<?php
namespace App\servicio;
use Illuminate\Http\Request;
class MenuServicio {
    public Request $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }
    public function links() {
        var_dump($this->request->all());
        return ['link1','link2'];
    }
    public static function linksEstatico() {
        return ['link1','link2'];
    }
}

