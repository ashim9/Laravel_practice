<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Country;
use App\Models\Division;
use App\Models\District;
use App\Models\Area;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $data = [
                'name' => 'Bangladesh'
            ];

            $country = Country::create($data);

            $division_data = [
                'country_id' => $country->id,
                'name' => 'Dhaka',
            ];

            $division = Division::create($division_data);


            $district_data = [
                'division_id' => $division->id,
                'name' => 'Uttara',
            ];

            $district = District::create($district_data);

            $area_data = [
                'district_id' => $district->id,
                'name' => 'badda',
            ];

            Area::create($area_data);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            //
        });
    }
};
