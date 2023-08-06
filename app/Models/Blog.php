<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
    'title',
    'excerpt',
    'author',
    'quip',
    'type',
    'subtype',
    'intro',
    'body',
    'created_at',
    'updated_at',
    'heading1',
    'heading2',
    'heading3',
    'heading4',
    'heading5',
    'heading6',
    'heading7',
    'heading8',
    'heading9',
    'heading10',
    'paragraph1Heading1',
    'paragraph2Heading1',
    'paragraph3Heading1',
    'paragraph1Heading2',
    'paragraph2Heading2',
    'paragraph3Heading2',
    'paragraph1Heading3',
    'paragraph2Heading3',
    'paragraph3Heading3',
    'paragraph1Heading4',
    'paragraph2Heading4',
    'paragraph3Heading4',
    'paragraph1Heading5',
    'paragraph2Heading5',
    'paragraph3Heading5',
    'paragraph1Heading6',
    'paragraph2Heading6',
    'paragraph3Heading6',
    'paragraph1Heading7',
    'paragraph2Heading7',
    'paragraph3Heading7',
    'paragraph1Heading8',
    'paragraph2Heading8',
    'paragraph3Heading8',
    'paragraph1Heading9',
    'paragraph2Heading9',
    'paragraph3Heading9',
    'paragraph1Heading10',
    'paragraph2Heading10',
    'paragraph3Heading10',
    'image_name',
    'image1_name',
    'image2_name',
    'image3_name',
    'image4_name',
    'image5_name',
    'image6_name',
    'image7_name',
    'image8_name',
    'image9_name',
    'image10_name',
    'imageCredit',
    'imageCredit1',
    'imageCredit2',
    'imageCredit3',
    'imageCredit4',
    'imageCredit5',
    'imageCredit6',
    'imageCredit7',
    'imageCredit8',
    'imageCredit9',
    'imageCredit10',
    ];
}
