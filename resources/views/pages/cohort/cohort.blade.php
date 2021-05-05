<!-- Cohort screen-->
<!-- These lines pull the header from the partials-->
@extends('layouts.app')
@section('title')
    Studio Management Portal | Cohort
@endsection
<!-- Form begins-->
@section('content')
<section>
    <header>
        <h1>Cohort Assignment</h1>
    </header>
    <div>
        <button><a href = "{{route('pages.cohort_select')}}"> View an existing Cohort:</button>
    </div>
    <form id="cohort-form" action="#">
        <fieldset id="cohort-select">
            <select id="Field101" name="Field101" class="field select medium" tabindex="5">
                <option value="First Choice">Started Sem 1 '19</option>
                <option value="Second Choice">Started Sem 2 '19</option>
                <option value="Third Choice">Started Sem 1 '20</option>
                <option value="Fourth Choice">Started Sem 2 '20</option>
                <option value="Fifth Choice">Started Sem 1 '21</option>
                <option value="Fifth Choice">Started Sem 2 '21</option>
            </select>

        </fieldset>

        <label class="desc" id="title106" for="Field106">
            Student Name:
        </label>

        <textarea id="Field106" name="Field106" class="field select medium" tabindex="11"></textarea>

        <label class="desc" id="title107" for="Field107">
            Select Paper
        </label>

        <select id="Field107" name="Field107" class="field select medium" tabindex="11">
            <option value="First Choice">Studio 1</option>
            <option value="Second Choice">Studio 2</option>
            <option value="Third Choice">Studio 3</option>
            <option value="Fourth Choice">Studio 4</option>
            <option value="Fifth Choice">Studio 5</option>
            <option value="Fifth Choice">Studio 6</option>
        </select>

        <label class="desc" id="title4" for="Field4">
            GitHub Username:
        </label>
        <textarea id="Field4" name="Field4" spellcheck="true" rows="1" cols="50" tabindex="4"></textarea>

        <div>
            <button class="submit-btn" type="submit">Submit</button>
        </div>
    </form>
</section>
@endsection
