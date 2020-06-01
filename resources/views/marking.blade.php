<?php
/* @var \App\Models\Subject $subject */
/* @var array $students */
/* @var array $studentMarks */
?>
@extends('layouts.default')

@section('content')
    <div class="subject-title">Предмет: <span class="text-uppercase"><?= $subject->name; ?></span></div>
    <hr class="background-gradient">

    <div class="marking-form-wrapper">

        <form action="{{route('marking')}}" method="post" class="marking-form">
            {{csrf_field()}}
            <input type="hidden" name="subject_id" value="<?= $subject->id; ?>">

            @if(old('message'))
                <div class="message background-gradient">{{old('message')}}</div>
            @endif

            <table class="marking-table">
                <thead class="background-gradient">
                <tr>
                    <th>Студент</th>
                    <th>Оцінка</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($students as $student) { ?>
                <tr>
                    <td><?= $student->name; ?></td>
                    <td>
                        <input
                            type="text"
                            class="mark-field"
                            name="student-<?= $student->id; ?>"
                            value="<?= $studentMarks[$student->id]; ?>"
                        >
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>


            <button type="submit" class="marking-form-button background-gradient">Зберегти</button>

        </form>

    </div>


@endsection
