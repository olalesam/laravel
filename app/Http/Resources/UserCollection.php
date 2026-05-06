<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
    public function showouli()
    {
        return "Hello ouli ";
    }

    public function toAdele ()
    {
        return "Hello Adele";
    }

    public function showmdd()
    {
        return "Hello Mame dieye";
    }

    public function showAmina()
    {
        return "Hello Amina";
    }


    public function ShowAminata()
    {
        return "Hello Aminata!";
    }

    
     public function showMax()
    {
        return "helo magatte gaye";
        
    }


    public function BambaDevTestBranch()
    {
        return "je veux merger cette branche de bambaDev dans la branche main";
        
    }


}
