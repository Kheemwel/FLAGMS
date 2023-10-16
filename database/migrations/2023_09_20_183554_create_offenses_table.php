<?php

use App\Models\Offenses;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('offenses', function (Blueprint $table) {
            $table->id();
            $table->string('offense_name')->unique();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('offenses_category_id');
            $table->foreign('offenses_category_id')->references('id')->on('offenses_categories');
            $table->timestamps();
        });

        Offenses::insert([
            [
                'offense_name' => 'Drug Possession',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Drug Use',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Severe Physical Harm',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Fraternity Membership',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Weapons Possession',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Explosives Possession',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Engaging in Explicit Content',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Hazing',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Staff Assault and Defamation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Reputation-Damaging Actions',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Smoking Violation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Stealing Violation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Cheating Violation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Cigarette and E-cigarette Possession',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Gambling Violation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Liquor Violation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Drunkenness Violation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Property Damage Violation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Misconduct Toward School Personnel',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Records Violation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Pornographic Materials Offense',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Public Intoxication Violation',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Public Display of Affection',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Repetitive Rule Violations',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Unauthorized School Involvement',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Physical Bullying',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Verbal Bullying',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Social Bullying',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Cyberbullying',
                'offenses_category_id' => 2 // Major Offense
            ],
            [
                'offense_name' => 'Cell Phone Violation',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Tardiness',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Dress Code Violation',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'ID Violation',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Improper Haircut',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Class Skipping',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Eating During Class',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Littering',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Unauthorized Desk Use',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Loitering in Corridors',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Safety Violation',
                'offenses_category_id' => 1 // Minor Offense
            ],
            [
                'offense_name' => 'Traffic Rule Violation',
                'offenses_category_id' => 1 // Minor Offense
            ]
        ]);        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offenses');
    }
};
