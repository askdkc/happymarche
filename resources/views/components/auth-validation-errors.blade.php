@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('エラーの内容を確認してください。') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

            @if(empty($errors->first('product_image')))
                <li>画像ファイルがあれば、再度選択してください。</li>
            @endif
        </ul>
    </div>
@endif
