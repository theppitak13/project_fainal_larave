<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //ดึงข้อมูลไปโชว์ในแต่ละหน้า
    function pullData()
    {
        $postData = Post::all();
        return view('index', compact('postData'));
    }
    function pullDataList()
    {
        $postData = Post::all();
        return view('listpost', compact('postData'));
    }

    function pullDataIdPost($id)
    {
        $postId = Post::find($id);
        return view('postpage', compact('postId'));
    }



    //อัพโหลดข้อมูล
    function uploadData(Request $request)
    {
        $request->validate(
            [
                'post_name' => 'required',
                'post_about' => 'required',
                'post_content' => 'required',
                'post_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
            [
                'post_name.required' => 'กรุณากรอกชื่อโพสต์',
                'post_about.required' => 'กรุณาระบุข้อมูลเกี่ยวกับโพสต์',
                'post_content.required' => 'กรุณากรอกเนื้อหาโพสต์',
                'post_img.required' => 'กรุณาอัปโหลดรูปภาพ',
                'post_img.image' => 'ไฟล์ต้องเป็นรูปภาพ',
                'post_img.mimes' => 'รูปภาพต้องเป็นประเภท: jpeg, png, jpg, gif, svg',
                'post_img.max' => 'ขนาดรูปภาพต้องน้อยกว่า 2048 KB',
            ]
        );
        if ($request->hasFile('post_img')) {
            $image = $request->file('post_img');
            $nameImg = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('post'), $nameImg);
        }
        DB::table('posts')->insert([
            'post_name' => $request->post_name,
            'post_about' => $request->post_about,
            'post_content' => $request->post_content,
            'post_img' => 'post/' . $nameImg,
        ]);
        $postData = Post::all();
        return view('index', compact('postData'));
    }


    //ลบข้อมูล
    function deleteData($id)
    {
        $data = Post::find($id);

        if ($data) {
            // ลบไฟล์รูปที่อยู่ใน public
            unlink(public_path($data->post_img));

            $data->delete();

            $postData = Post::all();
            return view('listpost', compact('postData'));
        }
    }



    //แก้ไขข้อมูล
    function editData($id)
    {
        $editData = Post::find($id);
        return view('edit', compact('editData'));
    }

    //อัพเดทข้อมูล
    function updateData(Request $request, $id)
    {

        $postEdit = Post::find($id);
        $request->validate([
            'post_name' => 'required',
            'post_about' => 'required',
            'post_content' => 'required',
            'post_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // อัปโหลดรูปภาพใหม่ (ถ้ามี)
        if ($request->hasFile('post_img')) {
            $image = $request->file('post_img');
            $nameImg = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('post'), $nameImg);

            // ลบรูปเก่า (ถ้ามี)
            if ($postEdit->post_img) {
                unlink(public_path($postEdit->post_img));
            }

            // อัปเดตข้อมูล
            $postEdit->update([
                'post_name' => $request->post_name,
                'post_about' => $request->post_about,
                'post_content' => $request->post_content,
                'post_img' => 'post/' . $nameImg,
            ]);
            $postData = Post::all();
            return view('listpost', compact('postData'));
        } else {
            // อัปเดตข้อมูล (ไม่มีการอัปโหลดรูป)
            $postEdit->update([
                'post_name' => $request->post_name,
                'post_about' => $request->post_about,
                'post_content' => $request->post_content,
            ]);
            $postData = Post::all();
            return view('listpost', compact('postData'));
        }
    }
}
