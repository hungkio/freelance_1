<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Trường following language lines contain Trường default error messages used by
    | Trường validator class. Some of Trườngse rules have multiple versions such
    | as Trường size rules. Feel free to tweak each of Trườngse messages here.
    |
    */

    'accepted' => 'Trường :attribute phải được chấp nhận.',
    'active_url' => 'Trường :attribute không đúng định dạng URL.',
    'after' => 'Trường :attribute phải là ngày sau :date.',
    'after_or_equal' => 'Trường :attribute phải là ngày bằng hoặc sau :date.',
    'alpha' => 'Trường :attribute chỉ được phép chứa ký tự.',
    'alpha_dash' => 'Trường :attribute chỉ được phép chứa ký tự, số, dấu gạch và dấu gạch dưới.',
    'alpha_num' => 'Trường :attribute chỉ được phép chứa ký tự và số.',
    'array' => 'Trường :attribute phải là một mảng.',
    'before' => 'Trường :attribute phải là ngày trước :date.',
    'before_or_equal' => 'Trường :attribute phải là ngày trước hoặc bằng ngày :date.',
    'between' => [
        'numeric' => 'Trường :attribute  phải nằm giữa: min và: max.',
        'file' => 'Trường :attribute  phải nằm giữa: min và: max kilobyte.',
        'string' => 'Trường :attribute  phải nằm trong khoảng: min và: max ký tự.',
        'array' => 'Truong :attribute  phải có giữa: min và: max items.',
    ],
    'boolean' => 'Trường :attribute  phải là true hoặc false.',
    'confirmed' => 'Trường :attribute  không khớp.',
    'date' => 'Trường :attribute  không phải là ngày hợp lệ.',
    'date_equals' => 'Trường :attribute  phải là ngày bằng :date.',
    'date_format' => 'Trường :attribute không khớp với định dạng :format.',
    'different' => 'Trường :attribute  và :o phải khác nhau.',
    'digits ' => ' Trường :attribute  phải là các chữ số. ',
    'digits_between ' => ' Trường :attribute  phải nằm giữa :min và :max. ',
    'dimensions' => 'Trường :attribute  có kích thước hình ảnh không hợp lệ.',
    'distinct' => 'Trường :attribute có giá trị trùng lặp.',
    'email' => 'Trường :attribute phải là một địa chỉ email hợp lệ.',
    'end_with' => 'Trường :attribute phải kết thúc bằng một trong các Trường sau following::values.',
    'exists' => 'Trường đã chọn :attribute  không hợp lệ.',
    'file' => 'Trường :attribute  phải là một tệp.',
    'filled' => 'Truong: trường thuộc tính phải có một giá trị.',
    'gt' => [
        'numeric' => 'Trường :attribute  phải lớn hơn :value.',
        'file' => 'Trường :attribute  phải lớn hơn :value kilobyte.',
        'string' => 'Trường :attribute  phải lớn hơn :value các ký tự .',
        'array' => 'Trường :attribute  phải có nhiều hơn :value items.',
    ],
    'gte' => [
        'numeric' => 'Trường :attribute  phải lớn hơn hoặc bằng :value.',
        'file' => 'Trường :attribute  phải lớn hơn hoặc bằng :value kilobyte.',
        'string' => 'Trường :attribute  phải lớn hơn hoặc bằng :value các ký tự .',
        'array' => 'Trường :attribute  phải có nhiều hơn hoặc bằng :value items.',
    ],
    'image' => 'Truong :attribute  phải là một hình ảnh.',
    'in' => 'Trường :attribute chọn không hợp lệ.',
    'in_array' => 'Trường: trường thuộc tính không tồn tại trong trường :o.',
    'integer' => 'Trường :attribute  phải là một số nguyên.',
    'ip' => 'Trường :attribute  phải là địa chỉ IP hợp lệ.',
    'ipv4' => 'Trường :attribute  phải là địa chỉ IPv4 hợp lệ.',
    'ipv6' => 'Trường :attribute  phải là địa chỉ IPv6 hợp lệ.',
    'json' => 'Trường :attribute  phải là một chuỗi JSON hợp lệ.',
    'lt' => [
        'numeric' => 'Trường :attribute  phải nhỏ hơn :value.',
        'file' => 'Trường :attribute  phải nhỏ hơn :value kilobyte.',
        'string' => 'Trường :attribute  phải ít hơn :value ký tự.',
        'array' => 'Trường :attribute  phải có ít hơn :value các mục.',
    ],
    'lte' => [
        'numeric' => 'Trường :attribute  phải nhỏ hơn hoặc bằng :value.',
        'file' => 'Trường :attribute  phải nhỏ hơn hoặc bằng :value kilobyte.',
        'string' => 'Trường :attribute  phải ít hơn hoặc bằng :value ký tự.',
        'array' => 'Trường :attribute  phải có ít hơn hoặc bằng :value các mục.',
    ],
    'max' => [
        'numeric' => 'Trường :attribute  phải lớn hơn :value.',
        'file' => 'Trường :attribute  phải lớn hơn :value kilobyte.',
        'string' => 'Trường :attribute  phải nhiều hơn :value ký tự.',
        'array' => 'Trường :attribute  phải có nhiều hơn :value các mục.',
    ],
    'mimes' => 'Trường :attribute  phải là một tệp có kiểu type::values.',
    'mimetypes' => 'Trường :attribute  phải là một tệp có kiểu type::values.',
    'min' => [
        'numeric' => 'Trường :attribute  phải lớn hơn :min.',
        'file' => 'Trường :attribute  phải lớn hơn :min kilobyte.',
        'string' => 'Trường :attribute  phải lớn hơn :min ký tự.',
        'array' => 'Truong :attribute  phải lớn hơn :min chỉ mục.',
    ],
    'not_in' => 'Trường chọn :attribute  không hợp lệ.',
    'not_regex' => 'Trường: định dạng thuộc tính không hợp lệ.',
    'numeric' => 'Trường :attribute  phải là một số.',
    'password' => 'Mật khẩu không đúng.',
    'present' => 'Truong :attribute  phải có.',
    'regex' => 'Trường :attribute định dạng không hợp lệ.',
    'required' => 'Trường :attribute  là bắt buộc.',
    'Requi_if' => 'Trường :attribute  là bắt buộc khi trường :o là: value.',
    'Requi_unless' => 'Trường :attribute  là bắt buộc trừ khi trường :or nằm trong :value. ',
    'Requi_with' => 'Trường :attribute  là bắt buộc khi có: giá trị.',
    'Requi_with_all' => 'Trường :attribute  là bắt buộc khi có: giá trị.',
    'Requi_without' => 'Trường :attribute  là bắt buộc khi: không có giá trị.',
    'required_without_all' => 'Trường :attribute  là bắt buộc khi không có :value nào hiện diện.',
    'same' => 'Trường :attribute  và trường :o phải khớp nhau.',
    'size' => [
        'numeric' => 'Trường :attribute  phải bằng :size.',
        'file' => 'Trường :attribute  phải bằng :size kilobyte.',
        'string' => 'Trường :attribute  phải bằng :size ký tự.',
        'array' => 'Trường :attribute  phải chứa :size các mục.',
    ],
    'started_with' => 'Trường :attribute  phải bắt đầu bằng một trong các trường sau following::values.',
    'string' => 'Truong :attribute  phải là một chuỗi.',
    'timezone' => 'Trường :attribute  phải là một vùng hợp lệ.',
    'unique' => 'Trường :attribute  đã được sử dụng.',
    'upload' => 'Truong :attribute  không tải lên được.',
    'url' => 'Trường :attribute định dạng không hợp lệ.',
    'uuid' => 'Trường :attribute  phải là một UUID hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using Trường
    | convention "attribute.rule" to name Trường lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Trường following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
