@extends('admin.partial.master')
@section('skills-active','active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>
@if(session()->has('success'))
    {{\Illuminate\Support\Facades\Session::get('success')}}
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">skills</h5>
                    <div class="mt-3">
                        <!-- Button trigger modal -->

                        <div>
                            <button
                                type="button"
                                class="btn btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#basicModal"
                            >
                                Launch modal
                            </button>
                            <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" >
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">add new component </h5>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <form action="{{url('add')}}"  method="post">
@csrf

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameBasic" class="form-label">question</label>
                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" name="question" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameBasic" class="form-label">option a</label>
                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name"  name="a"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameBasic" class="form-label">option b</label>
                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" name="b" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameBasic" class="form-label">option c</label>
                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" name="c" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameBasic" class="form-label">option d</label>
                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" name="d" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col mb-3">
<select name="ans">
    <option value="a">a</option>
    <option value="b">b</option>
    <option value="c">c</option>
    <option value="d">d</option>


</select>                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="modal fade" id="updateModal{{$q->id}}" tabindex="-1" aria-hidden="true" >--}}
{{--                                <div class="modal-dialog" role="document">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <h5 class="modal-title" id="exampleModalLabel1">update component </h5>--}}
{{--                                            <button--}}
{{--                                                type="button"--}}
{{--                                                class="btn-close"--}}
{{--                                                data-bs-dismiss="modal"--}}
{{--                                                aria-label="Close"--}}
{{--                                            ></button>--}}
{{--                                        </div>--}}
{{--                                        <form  action="{{url('update.'./$q->id)}}" method="post">--}}

{{--@csrf--}}
{{--                                            <div class="modal-body">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col mb-3">--}}
{{--                                                        <label for="nameBasic" class="form-label">question</label>--}}
{{--                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" value="{{$q->question}}" name="question" />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col mb-3">--}}
{{--                                                        <label for="nameBasic" class="form-label">option a</label>--}}
{{--                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name"  value="{{$q->a}}" name="a"/>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col mb-3">--}}
{{--                                                        <label for="nameBasic" class="form-label">option b</label>--}}
{{--                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name"  value="{{$q->b}}"name="b" />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col mb-3">--}}
{{--                                                        <label for="nameBasic" class="form-label">option c</label>--}}
{{--                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name" value="{{$q->c}}" name="c" />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col mb-3">--}}
{{--                                                        <label for="nameBasic" class="form-label">option d</label>--}}
{{--                                                        <input type="text" id="nameBasic" class="form-control" placeholder="Enter Name"  value="{{$q->c}}"name="d" />--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col mb-3">--}}
{{--                                                        <select name="ans">--}}
{{--                                                            <option @if($q->ans=='a') selected @endif value="a">a</option>--}}
{{--                                                            <option @if($q->ans=='b') selected @endif value="b">b</option>--}}
{{--                                                            <option @if($q->ans=='c') selected @endif value="c">c</option>--}}
{{--                                                            <option @if($q->ans=='d') selected @endif value="d">d</option>--}}


{{--                                                        </select>                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                            <div class="modal-footer">--}}
{{--                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">--}}
{{--                                                    Close--}}
{{--                                                </button>--}}
{{--                                                <button type="submit" class="btn btn-primary">Save changes</button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>


                        <!-- Modal -->
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="search" >
                    </div>
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>id</th>

                            <th>name</th>
                            <th>progress</th>

                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                        @foreach($questions as $question)

                            <tr>
                                <td>{{$loop->index}}</td>

                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$question->question}}</strong></td>
                                <td>{{$question->ans}}</td>
                                <td>

                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                   class="btn btn-primary"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#updateModal{{$question->id}}"
                                                   href="javascript:void(0);"
                                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                                >
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                ><i class="bx bx-trash me-1"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </td>

                </tr>
                @endforeach

                </tbody>
            </div>
        </div>


                </table>
                </div>                    </div>
                </div>
            </div>
    <div>

@endsection
