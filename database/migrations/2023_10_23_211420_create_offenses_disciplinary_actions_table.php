<?php

use App\Models\DisciplinaryActions;
use App\Models\OffenseLevels;
use App\Models\Offenses;
use App\Models\OffensesDisciplinaryActions;
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
        Schema::create('offenses_disciplinary_actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offense_id');
            $table->unsignedBigInteger('offense_level_id');
            $table->unsignedBigInteger('disciplinary_action_id');
            $table->foreign('offense_id')->references('id')->on('offenses')->cascadeOnDelete();
            $table->foreign('offense_level_id')->references('id')->on('offense_levels')->cascadeOnDelete();
            $table->foreign('disciplinary_action_id')->references('id')->on('disciplinary_actions')->cascadeOnDelete();
            $table->timestamps();
        });

        $first_offense = OffenseLevels::where('level', 'First Offense')->value('id');
        $second_offense = OffenseLevels::where('level', 'Second Offense')->value('id');
        $third_offense = OffenseLevels::where('level', 'Third Offense')->value('id');
        $fourth_offense = OffenseLevels::where('level', 'Fourth Offense')->value('id');
        $final_offense = OffenseLevels::where('level', 'Final Offense')->value('id');

        // Disciplinary Actions
        $dismissalID = DisciplinaryActions::where('action', 'Dismissal')->value('id');
        $suspensionID = DisciplinaryActions::where('action', 'Suspension and Remedial Classes')->value('id');
        $threeDayAcademicCommunityServiceID = DisciplinaryActions::where('action', '3-Day Academic Community Service')->value('id');
        $twoDayAcademicCommunityServiceID = DisciplinaryActions::where('action', '2-Day Academic Community Service')->value('id');
        $oralWarningID = DisciplinaryActions::where('action', 'Oral Warning')->value('id');

        // Major Offenses
        $drugPossessionID = Offenses::where('offense_name', 'Drug Possession')->value('id');
        $drugUseID = Offenses::where('offense_name', 'Drug Use')->value('id');
        $severePhysicalHarmID = Offenses::where('offense_name', 'Severe Physical Harm')->value('id');
        $fraternityMembershipID = Offenses::where('offense_name', 'Fraternity Membership')->value('id');
        $weaponsPossessionID = Offenses::where('offense_name', 'Weapons Possession')->value('id');
        $explosivesPossessionID = Offenses::where('offense_name', 'Explosives Possession')->value('id');
        $engagingExplicitContentID = Offenses::where('offense_name', 'Engaging in Explicit Content')->value('id');
        $hazingID = Offenses::where('offense_name', 'Hazing')->value('id');
        $staffAssaultDefamationID = Offenses::where('offense_name', 'Staff Assault and Defamation')->value('id');
        $reputationDamagingActionsID = Offenses::where('offense_name', 'Reputation-Damaging Actions')->value('id');
        $smokingViolationID = Offenses::where('offense_name', 'Smoking Violation')->value('id');
        $stealingViolationID = Offenses::where('offense_name', 'Stealing Violation')->value('id');
        $cheatingViolationID = Offenses::where('offense_name', 'Cheating Violation')->value('id');
        $cigaretteID = Offenses::where('offense_name', 'Cigarette and E-cigarette Possession')->value('id');
        $gamblingViolationID = Offenses::where('offense_name', 'Gambling Violation')->value('id');
        $liquorViolationID = Offenses::where('offense_name', 'Liquor Violation')->value('id');
        $drunkennessViolationID = Offenses::where('offense_name', 'Drunkenness Violation')->value('id');
        $propertyDamageViolationID = Offenses::where('offense_name', 'Property Damage Violation')->value('id');
        $misconductTowardSchoolPersonnelID = Offenses::where('offense_name', 'Misconduct Toward School Personnel')->value('id');
        $recordsViolationID = Offenses::where('offense_name', 'Records Violation')->value('id');
        $pornographicMaterialsOffenseID = Offenses::where('offense_name', 'Pornographic Materials Offense')->value('id');
        $publicIntoxicationViolationID = Offenses::where('offense_name', 'Public Intoxication Violation')->value('id');
        $publicDisplayOfAffectionID = Offenses::where('offense_name', 'Public Display of Affection')->value('id');
        $repetitiveRuleViolationsID = Offenses::where('offense_name', 'Repetitive Rule Violations')->value('id');
        $unauthorizedSchoolInvolvementID = Offenses::where('offense_name', 'Unauthorized School Involvement')->value('id');
        $physicalBullyingID = Offenses::where('offense_name', 'Physical Bullying')->value('id');
        $verbalBullyingID = Offenses::where('offense_name', 'Verbal Bullying')->value('id');
        $socialBullyingID = Offenses::where('offense_name', 'Social Bullying')->value('id');
        $cyberbullyingID = Offenses::where('offense_name', 'Cyberbullying')->value('id');

        // Minor Offenses
        $cellPhoneViolationID = Offenses::where('offense_name', 'Cell Phone Violation')->value('id');
        $tardinessID = Offenses::where('offense_name', 'Tardiness')->value('id');
        $dressCodeViolationID = Offenses::where('offense_name', 'Dress Code Violation')->value('id');
        $idViolationID = Offenses::where('offense_name', 'ID Violation')->value('id');
        $improperHaircutID = Offenses::where('offense_name', 'Improper Haircut')->value('id');
        $classSkippingID = Offenses::where('offense_name', 'Class Skipping')->value('id');
        $eatingDuringClassID = Offenses::where('offense_name', 'Eating During Class')->value('id');
        $litteringID = Offenses::where('offense_name', 'Littering')->value('id');
        $unauthorizedDeskUseID = Offenses::where('offense_name', 'Unauthorized Desk Use')->value('id');
        $loiteringInCorridorsID = Offenses::where('offense_name', 'Loitering in Corridors')->value('id');
        $safetyViolationID = Offenses::where('offense_name', 'Safety Violation')->value('id');
        $trafficRuleViolationID = Offenses::where('offense_name', 'Traffic Rule Violation')->value('id');
        
        OffensesDisciplinaryActions::insert([
            [
                'offense_id' => $drugPossessionID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $drugUseID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $severePhysicalHarmID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $fraternityMembershipID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $weaponsPossessionID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $explosivesPossessionID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $engagingExplicitContentID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $hazingID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $staffAssaultDefamationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $reputationDamagingActionsID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $smokingViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $smokingViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $stealingViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $stealingViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $cheatingViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $cheatingViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $cigaretteID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $cigaretteID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $gamblingViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $gamblingViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $liquorViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $liquorViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $drunkennessViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $drunkennessViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $propertyDamageViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $propertyDamageViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $misconductTowardSchoolPersonnelID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $misconductTowardSchoolPersonnelID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $recordsViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $recordsViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $pornographicMaterialsOffenseID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $pornographicMaterialsOffenseID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $publicIntoxicationViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $publicIntoxicationViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $publicDisplayOfAffectionID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $publicDisplayOfAffectionID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $repetitiveRuleViolationsID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $repetitiveRuleViolationsID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $unauthorizedSchoolInvolvementID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $unauthorizedSchoolInvolvementID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $physicalBullyingID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $physicalBullyingID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $verbalBullyingID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $verbalBullyingID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $socialBullyingID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $socialBullyingID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $cyberbullyingID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $cyberbullyingID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $cellPhoneViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $cellPhoneViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $cellPhoneViolationID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $cellPhoneViolationID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $cellPhoneViolationID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $tardinessID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $tardinessID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $tardinessID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $tardinessID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $tardinessID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $dressCodeViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $dressCodeViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $dressCodeViolationID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $dressCodeViolationID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $dressCodeViolationID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $idViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $idViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $idViolationID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $idViolationID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $idViolationID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $improperHaircutID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $improperHaircutID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $improperHaircutID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $improperHaircutID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $improperHaircutID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $classSkippingID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $classSkippingID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $classSkippingID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $classSkippingID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $classSkippingID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $eatingDuringClassID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $eatingDuringClassID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $eatingDuringClassID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $eatingDuringClassID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $eatingDuringClassID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $litteringID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $litteringID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $litteringID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $litteringID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $litteringID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $unauthorizedDeskUseID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $unauthorizedDeskUseID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $unauthorizedDeskUseID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $unauthorizedDeskUseID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $unauthorizedDeskUseID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $loiteringInCorridorsID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $loiteringInCorridorsID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $loiteringInCorridorsID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $loiteringInCorridorsID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $loiteringInCorridorsID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $safetyViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $safetyViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $safetyViolationID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $safetyViolationID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $safetyViolationID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ],
            [
                'offense_id' => $trafficRuleViolationID,
                'offense_level_id' => $first_offense,
                'disciplinary_action_id' => $oralWarningID,
            ],
            [
                'offense_id' => $trafficRuleViolationID,
                'offense_level_id' => $second_offense,
                'disciplinary_action_id' => $twoDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $trafficRuleViolationID,
                'offense_level_id' => $third_offense,
                'disciplinary_action_id' => $threeDayAcademicCommunityServiceID,
            ],
            [
                'offense_id' => $trafficRuleViolationID,
                'offense_level_id' => $fourth_offense,
                'disciplinary_action_id' => $suspensionID,
            ],
            [
                'offense_id' => $trafficRuleViolationID,
                'offense_level_id' => $final_offense,
                'disciplinary_action_id' => $dismissalID,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offenses_disciplinary_actions');
    }
};
