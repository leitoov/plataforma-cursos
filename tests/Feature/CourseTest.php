<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Course;
use App\Models\User;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_course_can_be_created_and_saved_to_the_database(): void
    {
        $courseData = [
            'title' => 'TDD con Laravel',
            'description' => 'Aprende a hacer testing',
            'video_url' => 'https://example.com/video',
            'price_ars' => 5000,
            'is_free' => false,
        ];

        $course = Course::create($courseData);

        $this->assertDatabaseHas('courses', [
            'title' => 'TDD con Laravel',
            'price_ars' => 5000,
        ]);
        
        $this->assertEquals('TDD con Laravel', $course->title);
    }

    public function test_a_course_can_have_many_modules(): void
    {
        $course = Course::create([
            'title' => 'Curso de Prueba',
            'description' => 'Descripción',
        ]);

        $course->modules()->create([
            'title' => 'Módulo 1',
            'order' => 1
        ]);

        $course->modules()->create([
            'title' => 'Módulo 2',
            'order' => 2
        ]);

        $this->assertCount(2, $course->modules);
        $this->assertEquals('Módulo 1', $course->modules->first()->title);
    }
}
