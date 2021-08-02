<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'artist' => 'required | max:100',
            'song_name' => 'required | max:100',
            'category' => 'required',
            'img_file_name' => 'required',
            'mp3_file_name' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'artist.required' => 'アーティスト名を入れて下さい',
           'artist.max' => '100文字以内で入力して下さい',
            'song_name.required' => '曲名を入れて下さい',
            'song_name.max' => '100文字以内で入力して下さい',
            'category.required' => 'カテゴリーを選んで下さい',
            'img_file_name.required' => '画像を選んで下さい',
            'mp3_file_name.required' => '曲を選んで下さい',
        ];
    }
}
