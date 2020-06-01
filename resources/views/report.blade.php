<?php
/* @var array $marks */
/* @var \App\Models\Student $student */
?>

<h3>Студент: {{$student->name}}</h3>

<table>

    <thead>
    <tr>
        <td>№</td>
        <td>Назва дисципліни</td>
        <td>Кредити</td>
        <td>Бали</td>
        <td>Оцінка за національною шкалою</td>
        <td>Оцінка ЕКТС</td>
    </tr>
    </thead>

    <tbody>
        @foreach($marks as $key => $mark)
            <tr>
                <th>{{$key + 1}}</th>
                <th>{{$mark->subject->name}}</th>
                <th>{{$mark->subject->creditsString($student->short)}}</th>
                <th>{{$mark->mark}}</th>
                <th>{{$mark->getMarkText($mark->subject->in_avg)}}</th>
                <th>{{$mark->getMarkLetter($mark->mark)}}</th>
            </tr>
        @endforeach
        <tr>
            <th></th>
            <th>Середній бал</th>
            <th></th>
            <th></th>
            <th>{{$student->avgMark()}}</th>
            <th></th>
        </tr>
    </tbody>

</table>

<style>
    table {
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #000000;
        padding: 10px;
    }
</style>
