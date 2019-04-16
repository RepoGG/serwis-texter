<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TexterSearch extends Controller
{
    function search(){
    	return view('posts.texter_search');
    }

    function action(Request $request)
    {
    	if($request->ajax())
    	{
    		$query = $request->get('query');
    		if($query != '')
    		{
    			$data = DB::table('posts')
    			->where('title', 'like', '%'.$query.'%')
    			->orWhere('description', 'like', '%'.$query.'%')
    			->orWhere('author', 'like', '%'.$query.'%')
    			->get();
    		}
    		else
    		{
    			$data = DB::table('posts')->orderBy('id', 'desc')->get();
    		}
    		$total_row = $data->count();
    		if($total_row > 0)
    		{
    			foreach($data as $row)
    			{
    				$output .='
    				<tr>
    					<td>'.$row->title.'</td>
    					<td>'.$row->description.'</td>
    					<td>'.$row->author.'</td>
    				</tr>
    				';
    			}
    		}
    		else
    		{
    			$output = '
    			<tr>
    				<td align="center" colspan="5">No Data Found</td>
    			</tr>
    			';
    		}
    		$data = array(
    			'table_data'          =>$output,
    			'total_data'          =>$total_data
    		);

    		echo json_encode($data);
    	}
    }
}
