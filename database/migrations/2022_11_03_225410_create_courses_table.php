<?php

use App\Models\Campus;
use App\Models\CourseName;
use App\Models\CourseTeacher;
use App\Models\Modality;
use App\Models\State;
use App\Models\TargetAudience;
use App\Models\Type;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->text('inscription');
            $table->text('program');
            $table->foreignIdFor(Type::class)->constrained();
            $table->foreignIdFor(State::class)->constrained();
            $table->foreignIdFor(Campus::class)->constrained();
            $table->foreignIdFor(Modality::class)->constrained();
            $table->foreignIdFor(CourseName::class)->constrained();
            $table->foreignIdFor(CourseTeacher::class)->constrained();
            $table->foreignIdFor(TargetAudience::class)->constrained();
            $table->integer('duration');
            $table->integer('sessions');
            $table->integer('synchronous_hours');
            $table->integer('autonomous_hours');
            $table->text('schedule');
            $table->date('start');
            $table->date('end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
