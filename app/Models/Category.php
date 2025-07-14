<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function otherMails()
    {
        return $this->hasMany(OtherMail::class);
    }

    public function incomingMails()
    {
        return $this->hasMany(IncomingMail::class);
    }

    public function loanDocuments()
    {
        return $this->hasMany(LoanDocument::class);
    }
}
