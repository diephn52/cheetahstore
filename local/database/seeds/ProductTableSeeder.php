<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // Sneakers Women    
        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '1',
            'unit_price' => '1400000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Orange Rind/White/White',
            'size' => '3.5US - 9US',
            'SKU' => '165385C',
            'material' => 'Canvas',
            'gender' => 'Women',
            'isNew'	=> '1',
            'isSale' => '0',
        ]);
    	
    	DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '1',
            'unit_price' => '1400000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'White/Pale Putty/White',
            'size' => '3.5US - 10US',
            'SKU' => '165384C',
            'material' => 'Canvas',
            'gender' => 'Women',
            'isNew'	=> '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '1',
            'unit_price' => '1500000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Enamel Red/Black/White',
            'size' => '3.5US - 10US',
            'SKU' => '165467C',
            'material' => 'Canvas',
            'gender' => 'Women',
            'isNew'	=> '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star Renew Canvas',
            'id_sub_category' => '1',
            'unit_price' => '1800000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Wheat/Black/White',
            'size' => '4US-10US',
            'SKU' => '164918C',
            'material' => 'Textile',
            'gender' => 'Women',
            'isNew'	=> '0',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck 70 Renew Canvas Hi [Limited Edition]',
            'id_sub_category' => '1',
            'unit_price' => '2200000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Moss/Natural/Black',
            'size' => '4US - 9US',
            'SKU' => '165421C',
            'material' => 'Renew Canvas',
            'gender' => 'Women',
            'isNew'	=> '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck 70 Vintage Canvas Hi',
            'id_sub_category' => '1',
            'unit_price' => '1900000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Enamel Red/Egret/Black',
            'size' => '3.5US - 10US',
            'SKU' => '164944C',
            'material' => 'Canvas',
            'gender' => 'Women',
            'isNew'	=> '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star Dainty',
            'id_sub_category' => '1',
            'unit_price' => '1300000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Indigo Fog/Indigo Fog/Vintage White',
            'size' => '3.5US - 6.5US',
            'SKU' => '564427C',
            'material' => 'Synthetic',
            'gender' => 'Women',
            'isNew'	=> '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star High Top',
            'id_sub_category' => '1',
            'unit_price' => '1300000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Rhubarb/Desert Peach/White',
            'size' => '3.5US - 10US',
            'SKU' => '163301C',
            'material' => 'Canvas',
            'gender' => 'Women',
            'isNew'	=> '1',
            'isSale' => '0',
        ]);

     // Apparel Women
        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star High Top',
            'id_sub_category' => '1',
            'unit_price' => '1300000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Rhubarb/Desert Peach/White',
            'size' => '3.5US - 10US',
            'SKU' => '163301C',
            'material' => 'Canvas',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);   

        // Apparel Women
        DB::table('products')->insert([
            'name' => 'Seasonal Chuck Patch Palm Fill Tee',
            'id_sub_category' => '2',
            'unit_price' => '500000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'White',
            'size' => 'S/M/L',
            'SKU' => '10017791102',
            'material' => 'Cotton',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'SSeasonal Chuck Patch Palm Fill Tee',
            'id_sub_category' => '2',
            'unit_price' => '500000',
            'promotion_price' => '0',
            'image' => '2',
            'color' => 'Black',
            'size' => 'S/M/L',
            'SKU' => '10017791001',
            'material' => 'Cotton',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse Star Chevron EMB Pant FT',
            'id_sub_category' => '2',
            'unit_price' => '900000',
            'promotion_price' => '0',
            'image' => '3',
            'color' => 'Vintage Grey',
            'size' => 'S/M/L',
            'SKU' => '10008924035',
            'material' => 'Cotton - Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse Star Chevron EMB Pant FT',
            'id_sub_category' => '2',
            'unit_price' => '900000',
            'promotion_price' => '0',
            'image' => '4',
            'color' => 'Black',
            'size' => 'S/M/L',
            'SKU' => '10008924001',
            'material' => 'Cotton',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse All Star Pullover Hoodie',
            'id_sub_category' => '2',
            'unit_price' => '1200000',
            'promotion_price' => '0',
            'image' => '5',
            'color' => 'Black',
            'size' => 'S/M/L',
            'SKU' => '10017828001',
            'material' => 'Cotton - Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse Star Chevron EMB FZ Hoodie FT',
            'id_sub_category' => '2',
            'unit_price' => '1250000',
            'promotion_price' => '0',
            'image' => '6',
            'color' => 'Bleached Coral',
            'size' => 'S/M/L',
            'SKU' => '10008922639',
            'material' => 'Cotton - Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse Star Chevron EMB FZ Hoodie',
            'id_sub_category' => '2',
            'unit_price' => '1250000',
            'promotion_price' => '0',
            'image' => '7',
            'color' => 'Vintage Grey Heather',
            'size' => 'S/M/L',
            'SKU' => '10008818035',
            'material' => 'Cotton - Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse Star Chevron EMB FZ Hoodie',
            'id_sub_category' => '2',
            'unit_price' => '1250000',
            'promotion_price' => '0',
            'image' => '8',
            'color' => 'Teal Tint',
            'size' => 'S/M/L',
            'SKU' => '10008818473',
            'material' => 'Cotton - Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);

          
    
    // Accessoris Women
        DB::table('products')->insert([
            'name' => 'Swap Out Backpack',
            'id_sub_category' => '3',
            'unit_price' => '1100000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Back Alley Brick/Enamel Red',
            'size' => '3.5US - 10US',
            'SKU' => '10017262608',
            'material' => 'Poly',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);      
        DB::table('products')->insert([
            'name' => 'Swap Out Backpack',
            'id_sub_category' => '3',
            'unit_price' => '1100000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Converse Black',
            'size' => '0',
            'SKU' => '10017262001',
            'material' => 'Poly',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);        
        DB::table('products')->insert([
            'name' => 'EDC 22 Backpackpack',
            'id_sub_category' => '3',
            'unit_price' => '850000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Converse Black',
            'size' => '0',
            'SKU' => '10008284322',
            'material' => 'Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);  
        DB::table('products')->insert([
            'name' => 'EDC 22 Backpackpack',
            'id_sub_category' => '3',
            'unit_price' => '850000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Washed Lilac',
            'size' => '0',
            'SKU' => '10008284506',
            'material' => 'Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);  
        DB::table('products')->insert([
            'name' => 'EDC 22 Backpackpack',
            'id_sub_category' => '3',
            'unit_price' => '850000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Navy/White',
            'size' => '0',
            'SKU' => '10007031426',
            'material' => 'Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);  
        DB::table('products')->insert([
            'name' => 'EDC 22 Backpackpack',
            'id_sub_category' => '3',
            'unit_price' => '850000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Black/White',
            'size' => '0',
            'SKU' => '10007031001',
            'material' => 'Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]); 
        DB::table('products')->insert([
            'name' => 'Sport Duffel',
            'id_sub_category' => '3',
            'unit_price' => '1000000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Field Surplus/Black/White',
            'size' => '0',
            'SKU' => '10008288322',
            'material' => 'Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]); 
        DB::table('products')->insert([
            'name' => 'Speed 2 Backpack',
            'id_sub_category' => '3',
            'unit_price' => '700000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Navy/White',
            'size' => '0',
            'SKU' => '10008286426',
            'material' => 'Polyester',
            'gender' => 'Women',
            'isNew' => '1',
            'isSale' => '0',
        ]);  

   
                

    // New Women
        


    // Sale Women
        
//---------------------------------------------------------------------------------

        //  MEN
        //  Sneakers
        DB::table('products')->insert([
            'name' => 'Chuck 70 Flight School',
            'id_sub_category' => '6',
            'unit_price' => '2100000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Silver/Black/Egret',
            'size' => '6.5US - 10US',
            'SKU' => '165050C',
            'material' => 'Leather',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Chuck 70 Flight School',
            'id_sub_category' => '6',
            'unit_price' => '2100000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Black/Black/Egret',
            'size' => '6.5US - 10US',
            'SKU' => '165049C',
            'material' => 'Leather',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '6',
            'unit_price' => '1400000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Blue/Black/Blue',
            'size' => '6.5US - 10US',
            'SKU' => '165383C',
            'material' => 'Canvas',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '6',
            'unit_price' => '1400000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Orange Rind/White/White',
            'size' => '3.5US - 9US',
            'SKU' => '165385C',
            'material' => 'Canvas',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '6',
            'unit_price' => '1400000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'White/Pale Putty/White',
            'size' => '3.5US - 9US',
            'SKU' => '165384C',
            'material' => 'Canvas',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '6',
            'unit_price' => '1400000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Black/White/Black',
            'size' => '3.5US - 9US',
            'SKU' => '165382C',
            'material' => 'Canvas',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '6',
            'unit_price' => '1500000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Pale Putty/Black/White',
            'size' => '3.5US - 10US',
            'SKU' => '165468C',
            'material' => 'Canvas',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '6',
            'unit_price' => '1500000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Pale Putty/Black/White',
            'size' => '3.5US - 10US',
            'SKU' => '165467C',
            'material' => 'Canvas',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);

    // Apparel Men

        DB::table('products')->insert([
            'name' => 'Converse All Star Short Sleeve Tee',
            'id_sub_category' => '7',
            'unit_price' => '600000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Black/White',
            'size' => '0',
            'SKU' => '10017432001',
            'material' => 'Cotton',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse All Star Short Sleeve Tee',
            'id_sub_category' => '7',
            'unit_price' => '600000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Black/White',
            'size' => '0',
            'SKU' => '10017432102',
            'material' => 'Cotton',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);
         DB::table('products')->insert([
            'name' => 'Converse Not Alone Tee',
            'id_sub_category' => '7',
            'unit_price' => '600000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Ozone Blue',
            'size' => '0',
            'SKU' => '10018178441',
            'material' => 'Cotton',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse Not Alone Tee',
            'id_sub_category' => '7',
            'unit_price' => '600000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Converse Black',
            'size' => '0',
            'SKU' => '10018178001',
            'material' => 'Cotton',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Converse Star Chevron Emb Pant',
            'id_sub_category' => '7',
            'unit_price' => '1000000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Black',
            'size' => '0',
            'SKU' => '10017677001',
            'material' => 'Cotton',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse Star Chevron Emb Pant',
            'id_sub_category' => '7',
            'unit_price' => '950000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Vintage Grey Heather',
            'size' => '0',
            'SKU' => '10008815035',
            'material' => 'Cotton',
            'gender' => 'Men',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse Archive Chuck Short Sleeve Tee',
            'id_sub_category' => '7',
            'unit_price' => '600000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'White',
            'size' => '0',
            'SKU' => '10018251102',
            'material' => 'Cotton',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse Archive Chuck Short Sleeve Tee',
            'id_sub_category' => '7',
            'unit_price' => '600000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Black',
            'size' => '0',
            'SKU' => '10018251001',
            'material' => 'Cotton',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);


    //Accessories Men
        DB::table('products')->insert([
            'name' => 'Speed 2 Backpack',
            'id_sub_category' => '8',
            'unit_price' => '700000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Black',
            'size' => '0',
            'SKU' => '10008286613',
            'material' => 'polyster',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);
         DB::table('products')->insert([
            'name' => 'EDC 22 Backpack',
            'id_sub_category' => '8',
            'unit_price' => '850000',
            'promotion_price' => '0',
            'image' => '2',
            'color' => 'Navy/White',
            'size' => '0',
            'SKU' => '10007031426',
            'material' => 'Polyester',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);
         DB::table('products')->insert([
            'name' => 'EDC 22 Backpack',
            'id_sub_category' => '8',
            'unit_price' => '850000',
            'promotion_price' => '0',
            'image' => '3',
            'color' => 'Black/White',
            'size' => '0',
            'SKU' => '10007031001',
            'material' => 'Polyester',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);
         DB::table('products')->insert([
            'name' => 'Sport Duffel',
            'id_sub_category' => '8',
            'unit_price' => '1000000',
            'promotion_price' => '0',
            'image' => '4',
            'color' => 'Field Surplus/Black/White',
            'size' => '0',
            'SKU' => '10008288322',
            'material' => 'Polyester',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);
         DB::table('products')->insert([
            'name' => 'Speed 2 Backpack',
            'id_sub_category' => '8',
            'unit_price' => '700000',
            'promotion_price' => '0',
            'image' => '5',
            'color' => 'Navy/White',
            'size' => '0',
            'SKU' => '10008286426',
            'material' => 'Polyester',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);
         DB::table('products')->insert([
            'name' => 'Speed 2 Backpack',
            'id_sub_category' => '8',
            'unit_price' => '700000',
            'promotion_price' => '0',
            'image' => '6',
            'color' => 'Field Surplus/Surplus Olive',
            'size' => '0',
            'SKU' => '10008286322',
            'material' => 'Polyester',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);
         DB::table('products')->insert([
            'name' => 'Speed 2 Backpack',
            'id_sub_category' => '8',
            'unit_price' => '700000',
            'promotion_price' => '0',
            'image' => '7',
            'color' => 'Dark Burgundy/Winetasting/White',
            'size' => '0',
            'SKU' => '10008286613',
            'material' => 'Polyester',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);
         DB::table('products')->insert([
            'name' => 'AS IF Backpack',
            'id_sub_category' => '8',
            'unit_price' => '700000',
            'promotion_price' => '0',
            'image' => '8',
            'color' => 'Black',
            'size' => '0',
            'SKU' => '10008272001',
            'material' => 'Polyester',
            'gender' => 'Men',
            'isNew' => '0',
            'isSale' => '1',
        ]);

//------------------------------------------------------------------------------------------------

    // Sneakers KIDS
        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '11',
            'unit_price' => '1400000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Orange Rind/White/White',
            'size' => '3.5US - 9US',
            'SKU' => '165385C',
            'material' => 'Canvas',
            'gender' => 'Kids',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '11',
            'unit_price' => '1400000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'White/Pale Putty/White',
            'size' => '3.5US - 10US',
            'SKU' => '165384C',
            'material' => 'Canvas',
            'gender' => 'Kids',
            'isNew' => '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star We Are Not Alone',
            'id_sub_category' => '11',
            'unit_price' => '1500000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Enamel Red/Black/White',
            'size' => '3.5US - 10US',
            'SKU' => '165467C',
            'material' => 'Canvas',
            'gender' => 'Kids',
            'isNew' => '1',
            'isSale' => '0',
        ]);

        DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star Renew Canvas',
            'id_sub_category' => '11',
            'unit_price' => '1800000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Wheat/Black/White',
            'size' => '4US-10US',
            'SKU' => '164918C',
            'material' => 'Textile',
            'gender' => 'Kids',
            'isNew' => '0',
            'isSale' => '0',
        ]);


         DB::table('products')->insert([
            'name' => 'Chuck Taylor All Star Simple Step Summer Fundamentals',
            'id_sub_category' => '11',
            'unit_price' => '750000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Wheat/Black/White',
            'size' => '11.5US - 13.5US, 1US - 3US',
            'SKU' => '756118C',
            'material' => 'Canvas',
            'gender' => 'Kids',
            'isNew' => '1',
            'isSale' => '0',
        ]);
        DB::table('products')->insert([
            'name' => 'Chuck Taylor Classic',
            'id_sub_category' => '11',
            'unit_price' => '850000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'Optical White',
            'size' => '11.5US - 13.5US, 1US - 3US',
            'SKU' => '327470C',
            'material' => 'Canvas',
            'gender' => 'Kids',
            'isNew' => '1',
            'isSale' => '0',
        ]); 
        DB::table('products')->insert([
            'name' => 'Chuck Taylor Classic',
            'id_sub_category' => '11',
            'unit_price' => '850000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'High Risk Red',
            'size' => '11.5US - 13.5US, 1US - 3US',
            'SKU' => '327469C',
            'material' => 'Canvas',
            'gender' => 'Kids',
            'isNew' => '1',
            'isSale' => '0',
        ]); 
        DB::table('products')->insert([
            'name' => 'Chuck Taylor Classic',
            'id_sub_category' => '11',
            'unit_price' => '850000',
            'promotion_price' => '0',
            'image' => '1',
            'color' => 'High Risk Red',
            'size' => '11.5US - 13.5US, 1US - 3US',
            'SKU' => '327468C',
            'material' => 'Canvas',
            'gender' => 'Kids',
            'isNew' => '0',
            'isSale' => '1',
        ]); 

    }
}


            
 