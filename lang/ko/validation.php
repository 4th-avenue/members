<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute를 승인해 주세요.',
    'accepted_if' => ':other가 :value인 경우 :attribute를 승인해 주세요.',
    'active_url' => ':attribute가 유효한 URL이 아닙니다.',
    'after' => ':attribute에는 :date보다 뒤의 날짜를 지정해 주세요.',
    'after_or_equal' => ':attribute에는 :date 이후 날짜를 지정해 주세요.',
    'alpha' => ':attribute는 알파벳만 이용할 수 있습니다.',
    'alpha_dash' => ':attribute는 알파벳과 대시(-) 및 밑줄(_)을 이용할 수 있습니다.',
    'alpha_num' => ':attribute는 알파벳 숫자를 사용할 수 있습니다.',
    'array' => ':attribute는 배열이어야 합니다.',
    'ascii' => ':attribute는 반각의 영숫자나 기호만으로 지정해 주세요.',
    'before' => ':attribute에는 :date보다 뒤의 날짜를 이용해 주세요.',
    'before_or_equal' => ':attribute에는 :date 이전 날짜를 이용해 주세요.',
    'between' => [
        'array' => ':attribute는 :min개에서 :max개 사이로 지정해 주세요.',
        'file' => ':attribute는 :min kb에서 :max kb 사이로 지정해 주세요.',
        'numeric' => ':attribute는 :min에서 :max사이로 지정해 주세요.',
        'string' => ':attribute는 :min문자에서, :max문자 사이로 지정해 주세요.',
    ],
    'boolean' => ':attribute는 true나 false를 지정해 주세요.',
    'confirmed' => ':attribute 확인이 일치하지 않습니다.',
    'current_password' => '패스워드가 일치하지 않습니다.',
    'date' => ':attribute에는 유효한 날짜를 지정하십시오.',
    'date_equals' => ':attribute에는 :date와 같은 날짜를 지정해 주세요.',
    'date_format' => ':attribute는 :format 형식으로 지정해 주세요.',
    'decimal' => ':attribute는 소수점 이하 : decimal 자리 숫자를 지정해 주세요.',
    'declined' => 'attribute는 거부할 지정을 해주세요.',
    'declined_if' => ':attribute는 :other가 :value일 때는 거부하는 지정을 해주세요.',
    'different' => ':attribute와 :other에는 다른 내용을 지정해 주십시오.',
    'digits' => ':attribute는 :digits 자리수로 지정해 주세요.',
    'digits_between' => ':attribute는 :min자리에서 :max자리 사이로 지정해 주세요.',
    'dimensions' => ':attribute 도형 크기가 잘못되었습니다.',
    'distinct' => ':attribute에는 다른 값을 지정하십시오.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => ':attribute에는 유효한 이메일 주소를 지정하십시오.',
    'ends_with' => ':attribute에는 :values 중 하나로 끝나는 값을 지정하십시오.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => '선택된 :attribute는 올바르지 않습니다.',
    'file' => ':attribute에는 파일을 지정해 주세요.',
    'filled' => ':attribute에 값을 지정하십시오.',
    'gt' => [
        'array' => ':attribute에는 :value개보다 많은 아이템을 지정해 주세요.',
        'file' => ':attribute에는 :value kb보다 큰 파일을 지정하십시오.',
        'numeric' => ':attribute에는 :value보다 큰 값을 지정하십시오.',
        'string' => ':attribute는 :value문자보다 길게 지정해 주세요.',
    ],
    'gte' => [
        'array' => ':attribute에는 :value개 이상의 아이템을 지정하십시오.',
        'file' => ':attribute에는 :value kb이상의 파일을 지정해 주세요.',
        'numeric' => ':attribute에는 :value 이상의 값을 지정하십시오.',
        'string' => ':attribute는 :value문자 이상으로 지정해 주세요.',
    ],
    'image' => ':attribute에는 이미지 파일을 지정해 주세요.',
    'in' => ':attribute 값이 유효하지 않습니다.',
    'in_array' => ':attribute 값이 :other 필드의 요소가 아닙니다.',
    'integer' => ':attribute 값이 정수가 아닙니다.',
    'ip' => ':attribute 값이 유효한 IP 주소가 아닙니다.',
    'ipv4' => ':attribute에는, 유효한 IPv4 주소를 지정해 주세요.',
    'ipv6' => ':attribute에는, 유효한 IPv6 주소를 지정해 주세요.',
    'json' => ':attribute 값이 유효한 JSON 문자열이 아닙니다.',
    'lowercase' => ':attribute는 소문자로만 지정해 주세요.',
    'lt' => [
        'array' => ':attribute에는 :value개보다 적은 아이템을 지정해 주세요.',
        'file' => ':attribute에는 :value kb보다 작은 파일을 지정하십시오.',
        'numeric' => ':attribute에는 :value보다 작은 값을 지정하십시오.',
        'string' => ':attribute는 :value문자보다 짧게 지정해 주세요.',
    ],
    'lte' => [
        'array' => ':attribute에는 :value개 이하의 아이템을 지정해 주세요.',
        'file' => ':attribute에는 :value kb 이하의 파일을 지정해 주세요.',
        'numeric' => ':attribute에는 :value 이하의 값을 지정해 주세요.',
        'string' => ':attribute는 :value문자 이하로 지정해 주세요.',
    ],
    'mac_address' => ':attribute에는 유효한 MAC 주소를 지정해 주세요.',
    'max' => [
        'array' => ':attribute는 :max개를 초과할 수 없습니다.',
        'file' => ':attribute에는 :max kb 이하의 파일을 지정해 주세요.',
        'numeric' => ':attribute에는 :max 이하의 숫자를 지정해 주세요.',
        'string' => ':attribute는 :max문자 이하로 지정해 주세요.',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes' => ':attribute에는 :values 유형의 파일을 지정하십시오.',
    'mimetypes' => ':attribute에는 :values 유형의 파일을 지정하십시오.',
    'min' => [
        'array' => ':attribute는 :min개 이상 지정해 주세요.',
        'file' => ':attribute에는 :min kb 이상의 파일을 지정해 주세요.',
        'numeric' => ':attribute에는 :min 이상의 숫자를 지정해 주세요.',
        'string' => ':attribute는 :min자 이상이어야 합니다.',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => ':attribute는 존재해서는 안됩니다.',
    'missing_if' => ':other가 :value인 경우 :attribute는 존재하지 않아야 합니다.',
    'missing_unless' => ':other가 :value가 아닌 경우 :attribute는 존재하지 않아야 합니다.',
    'missing_with' => ':values를 지정하는 경우 :attribute는 존재하지 않아야 합니다.',
    'missing_with_all' => ':values를 지정하는 경우 :attribute는 존재하지 않아야 합니다.',
    'multiple_of' => ':attribute에는 :value의 배수를 지정해 주세요.',
    'not_in' => '선택된 :attribute는 올바르지 않습니다.',
    'not_regex' => ':attribute의 형식이 올바르지 않습니다.',
    'numeric' => ':attribute에는 숫자를 지정해 주세요.',
    'password' => [
        'letters' => 'The :attribute field must contain at least one letter.',
        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute field must contain at least one number.',
        'symbols' => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => ':attribute가 존재하지 않습니다.',
    'prohibited' => ':attribute는 입력금지입니다.',
    'prohibited_if' => ':other가 :value인 경우 :attribute는 입력금지입니다.',
    'prohibited_unless' => ':other가 :value가 아닌 경우 :attribute는 입력금지입니다.',
    'prohibits' => ':attribute는 :other 입력을 금지하고 있습니다.',
    'regex' => '::attribute에 올바른 형식을 지정하십시오.',
    'required' => ':attribute은 반드시 작성해야 합니다.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => ':other가 :value인 경우 :attribute도 지정해 주세요.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => ':other가 :values가 아닌 경우 :attribute를 지정하십시오.',
    'required_with' => ':values를 지정할 경우 :attribute도 지정해 주세요.',
    'required_with_all' => ':values를 지정할 경우 :attribute도 지정해 주세요.',
    'required_without' => ':values를 지정하지 않을 경우 :attribute를 지정하십시오.',
    'required_without_all' => ':values 중 어느 것도 지정하지 않을 경우 :attribute를 지정하십시오.',
    'same' => ':attribute와 :other에는 같은 값을 지정하십시오.',
    'size' => [
        'array' => ':attribute는 :size개 지정해 주세요.',
        'file' => ':attribute 파일은 :size kb여야 합니다.',
        'numeric' => ':attribute는 :size를 지정해 주세요.',
        'string' => ':attribute는 :size문자로 지정해 주세요.',
    ],
    'starts_with' => ':attribute에는 :values 중 하나로 시작하는 값을 지정하십시오.',
    'string' => ':attribute는 문자열을 지정해 주세요.',
    'timezone' => ':attribute에는 유효한 존을 지정해 주세요.',
    'unique' => ':attribute 값은 이미 존재합니다.',
    'uploaded' => ':attribute의 업로드에 실패했습니다.',
    'uppercase' => ':attribute는 대문자로만 지정해 주세요.',
    'url' => ':attribute에 올바른 형식을 지정하십시오.',
    'ulid' => ':attribute에 유효한 ULID를 지정하십시오.',
    'uuid' => ':attribute에 유효한 UUID를 지정해 주세요.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title'=>'제목',
        'body'=>'본문',
        'image'=>'사진',
    ],

];