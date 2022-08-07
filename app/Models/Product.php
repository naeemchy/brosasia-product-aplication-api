<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'image',
        'price',
    ];

    public const PRODUCT_NANE_ONE = 'Minicure and Pedicure Set';
    public const PRODUCT_NANE_TWO = 'Digital Thermometer Multicolor';
    public const PRODUCT_NANE_THREE = 'Cross Body Bag';
    public const PRODUCT_NANE_FOUR = 'Camera For Men';
    public const PRODUCT_NANE_FIVE = 'Camera For Women';

    public const PRODUCT_IMAGE_ONE = 'https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?cs=srgb&dl=pexels-math-90946.jpg&fm=jpg';
    public const PRODUCT_IMAGE_TWO = 'https://cdn.shopify.com/s/files/1/0070/7032/files/image5_4578a9e6-2eff-4a5a-8d8c-9292252ec848.jpg?v=1620247043';
    public const PRODUCT_IMAGE_THREE = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDV38sG8GdE25cn2Ni55rNKkjze2vRh2YWG6LpTmMN8csdWaoX2bak4cuIU4JKtNCwts4&usqp=CAU';
    public const PRODUCT_IMAGE_FOUR = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9kUjoLJOXMhQTdYWfp4EIRfzgth7uI-nVIIkiwCTcKPzNlqF-6_o_Ke3OtxKuAqOug3c&usqp=CAU';
    public const PRODUCT_IMAGE_FIVE = 'https://media.istockphoto.com/photos/nikon-d800-and-tamron-af-sp-2470mm-f28-lens-picture-id512751444?k=20&m=512751444&s=612x612&w=0&h=7wkAst5ELC3OqrWeWLkm-crim3hY-DUPrqUph5VIa68=';

    public const PRODUCT_PRICE_ONE = '45.50';
    public const PRODUCT_PRICE_TWO = '90.00';
    public const PRODUCT_PRICE_THREE = '24.50';
    public const PRODUCT_PRICE_FOUR = '145.50';
    public const PRODUCT_PRICE_FIVE = '66.50';
}
