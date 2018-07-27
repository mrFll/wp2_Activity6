@extends('managerViews/managerTemplate')

@section('title', 'معرفی محصول جدید')

// TODO get variables from data base:
    // TODO companies
    // TODO categories

@section('content')
    @parent

    <form>

        <label for="pr_image">تصویر اصلی</label>
        <input type="image" id="pr_image" name="product_image"><br>

        <label for="pr_title">عنوان</label>
        <input type="text" id="pr_title" name="product_title"><br>

        <label for="pr_company">شرکت</label>
        <select id="pr_company" name="product_company">
            <option value="volvo">Volvo</option>
        </select><br>

        <label for="pr_category">دسته بندی</label>
        <select id="pr_category" name="product_category">
            <option value="volvo">Volvo</option>
        </select><br>

        <label for="pr_price">قیمت</label>
        <input type="number" id="pr_price" name="product_price" min="0"><br>

        <label for="pr_status">وضعیت محصول</label>
        <select id="pr_status" name="product_status">
            <option value="1">موجود</option>
            <option value="2">نا موجود</option>
            <option value="3">تولید توقف</option>
            <option value="4">به زودی</option>
        </select><br>

        <label for="pr_detail">توضیحات</label>
        <textarea id="pr_detail" name="product_details">
        </textarea><br>

        <!-- TODO add other images as much as user can -->
        <p>images TODO</p>
    </form>

    <button onclick="sendDate()">add</button>

@endsection