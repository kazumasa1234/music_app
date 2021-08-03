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
            'img_file_name' => 'required | image |max:20000',
            //@TODO mp3バグ
            'mp3_file_name' => 'required | mimes:audio/mp3 |max:1000'
        ];
    }


    public function messages()
    {
        return [
            'artist.required' => 'アーティスト名が入力されていません',
           'artist.max' => '100文字以内で入力して下さい',
            'song_name.required' => '曲名が入力されていません',
            'song_name.max' => '100文字以内で入力して下さい',
            'category.required' => 'カテゴリーが選ばれていません',
            'img_file_name.required' => '画像が選ばれていません',
            'img_file_name.image' => '選択したファイルは使用できません',
            'img_file_name.max' => '20MB以下のファイルを選択して下さい',
            'mp3_file_name.required' => '曲が選ばれていません',
            'mp3_file_name.mimes' => '選択したファイルは使用できません',
            'mp3_file_name.max' => '20MB以下のファイルを選択して下さい',

        ];
    }
}
