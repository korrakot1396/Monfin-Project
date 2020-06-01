@extends('layouts.master')

@section('content')


    <!-- products listing -->
    <!-- Latest SHirts -->

    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                
                <div class="row">
                    <div class="large-12 columns">
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Select Size
                            <select>
                                <option value="small">
                                    Small
                                </option>
                                <option value="medium">
                                    Medium
                                </option>
                                <option value="large">
                                    Large
                                </option>

                            </select>
                        </label>
                        <a href="#" class="button  expanded">Add to Cart</a>
                    </div>
                </div>
                <p class="text-left subheader">
                    <small>* Designed by <a href="https://www.youtube.com/webdevmatics">Webdevmatics</a></small>
                </p>

            </div>


            <div class="item-wrapper">

                @if(auth()->check())
                <a href="#" class="button" data-open="product-review-modal">Write a review</a>

               @include('review_form')
                @else
                    <a href="/login" class="button" >Write a review</a>

                @endif
            </div>

            
        </div>
    </div>

@endsection