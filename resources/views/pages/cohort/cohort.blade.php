<!-- Cohort screen-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
    <section class='cohort-screen'>

        <div class="createCohort">
            <h1>Create Cohort</h1>
        </div>
        <form action="{{ route('cohort.store') }}" method="POST">
            <div class="input-group">
                {{-- <input list="years" name="year"> --}}
                <select id="student_name" name="year" required>
                    <option value="2019 Semester 1">2019 Semester 1
                    <option value="2019 Semester 2">2019 Semester 2
                    <option value="2020 Semester 1">2020 Semester 1
                    <option value="2020 Semester 2">2020 Semester 2
                    <option value="2021 Semester 1">2021 Semester 1
                    <option value="2021 Semester 2">2021 Semester 2
                    </select>
            </div>
            @csrf
            <div class="input-group">
                <input id="saveForm" name="" type="submit" value="Submit" class="submit-btn">
            </div>
            </div>
        </form>
        <table id="cohort-paper">
            <tr>
                <form action="{{ route('semesters.store') }}" method="POST">
                    <h1>Studio 1</h1>
                    @csrf
                    <div class="form-col">
                        <div class="input-group">
                            <select id="student_name" name="cohort_id" required>
                                <option>--- Select Cohort ---</option>
                                @foreach ($cohort as $value)
                                    <option value="{{ $value->id }}">{{ $value->year }}</option>
                                @endforeach
                            </select>
                            <textarea id="note2" name="students" placeholder="Enter students name ✍🏻"></textarea>
                        </div>
                        <div class="input-group">
                            <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
                        </div>
                    </div>
                </form>
            </tr>
            <tr>
                <form action="{{ route('semesters.store') }}" method="POST">
                    <h1>Studio 2</h1>
                    @csrf
                    <div class="form-col">
                        <div class="input-group">
                            <select id="student_name" name="cohort_id" required>
                                <option>--- Select Cohort ---</option>
                                @foreach ($cohort as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            <textarea id="note2" name="students" placeholder="Enter students name ✍🏻"></textarea>
                        </div>
                        <div class="input-group">
                            <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
                        </div>
                    </div>
                </form>
            </tr>
            <tr>
                <form action="{{ route('semesters.store') }}" method="POST">
                    <h1>Studio 3</h1>
                    @csrf
                    <div class="form-col">
                        <div class="input-group">
                            <select id="student_name" name="cohort_id" required>
                                <option>--- Select Cohort ---</option>
                                @foreach ($cohort as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            <textarea id="note2" name="students" placeholder="Enter students name ✍🏻"></textarea>
                        </div>
                        <div class="input-group">
                            <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
                        </div>
                    </div>
                </form>
            </tr>
            <tr>
                <form action="{{ route('semesters.store') }}" method="POST">
                    <h1>Studio 4</h1>
                    @csrf
                    <div class="form-col">
                        <div class="input-group">
                            <select id="student_name" name="cohort_id" required>
                                <option>--- Select Cohort ---</option>
                                @foreach ($cohort as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            <textarea id="note2" name="students" placeholder="Enter students name ✍🏻"></textarea>
                        </div>
                        <div class="input-group">
                            <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
                        </div>
                    </div>
                </form>
            </tr>
        </table>
        <table cellpadding="0" cellspacing="0" cellborder="0">
            <thead>
                <tr>
                    <th>List of Cohorts 📜</th>
                </tr>
            </thead>
        </table>

        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" cellborder="0">
                <tbody>
                    @foreach ($cohort as $key)
                        <tr>
                            <td><a href="{{ route('semesters.show', $key->id) }}">{{ $key->year }}</a></td>
                            <td>
                                <form onsubmit="return confirm('Do you really want to delete this cohort?');"
                                    action="{{ route('students.destroy', $key->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-delete" type="submit" class="">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
@endsection
