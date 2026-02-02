<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');
            $table->unsignedBigInteger('project_id');
            $table->foreign('blog_id')->references('id')->on('blogs');
            $table->foreign('project_id')->references('id')->on('projects');
        });
        DB::statement('
            INSERT INTO blog_project (blog_id, project_id)
            SELECT id, project_id
            FROM blogs
            WHERE project_id IS NOT NULL;
        ');
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropColumn('project_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->nullable()->after('id');
            $table->foreign('project_id')->references('id')->on('projects');
        });
        DB::statement('
            UPDATE blogs
            SET project_id = (
                SELECT project_id
                FROM blog_project r
                WHERE r.blog_id = blogs.id
            )
            WHERE blogs.id IN (
                SELECT blog_id
                FROM blog_project
                GROUP BY blog_id
                HAVING COUNT(*) = 1
            );
        ');
        Schema::dropIfExists('blog_project');
    }
};
