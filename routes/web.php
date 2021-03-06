<?php

/*
Pengembang berikutnya bisa mendownload sourcecode terbaru dari kodingan ini dari:
Github => https://github.com/toscayconnery/BankIndonesiaDPSISSK

Creator :
Tosca Yoel Connery	=>	toscayoelconnery@gmail.com
Faishal Ilham		=>	faishal15@gmail.com
*/

Route::get('/', 'DashboardController@index');
Route::get('dashboard', 'DashboardController@index');
Route::get('/home', 'DashboardController@index')->name('home');

// PROYEK
Route::get('list-proyek', 'ProjectController@list_proyek');
Route::post('save-input-proyek', 'ProjectController@save_input_proyek');
Route::get('input-tahap-proyek/{id}', 'ProjectController@input_tahap_proyek');
Route::post('input-tahap-proyek/{id}', 'ProjectController@save_input_tahap_proyek');
Route::get('input-sub-tahapan/{id}', 'ProjectController@input_sub_tahapan');
Route::post('input-sub-tahapan/{id}', 'ProjectController@save_input_sub_tahapan');
Route::get('list-file-sub-tahapan/{id}/{deeppath?}', 'ProjectController@list_file_sub_tahapan');			//Akses Folder & File
Route::post('list-file-sub-tahapan/{id}/{deeppath?}', 'ProjectController@save_list_file_sub_tahapan');		//Upload File
Route::post('tambah-folder-sub-tahapan/{id}/{deeppath?}', 'ProjectController@tambah_folder_sub_tahapan');	//Tambah Folder
Route::get('mulai-proyek/{id_proyek}', 'ProjectController@mulai_proyek');
Route::get('mulai-tahap-proyek/{id_tahapan}', 'ProjectController@mulai_tahap_proyek');
Route::get('mulai-sub-tahapan-proyek/{id}', 'ProjectController@mulai_sub_tahapan_proyek');
Route::get('selesaikan-semua-sub-tahapan/{id}', 'ProjectController@selesaikan_tahapan_proyek');
Route::get('selesaikan-sub-tahapan/{id}', 'ProjectController@selesaikan_sub_tahapan_proyek');
Route::post('upload-file-mlbi/{id}/{deeppath?}', 'ProjectController@upload_file_mlbi');
Route::get('delete-file-sub-tahapan/{id_file}', 'ProjectController@delete_file_sub_tahapan');
Route::get('delete-sub-tahapan/{id_sub_tahapan}', 'ProjectController@delete_sub_tahapan');
Route::get('delete-folder-sub-tahapan/{id_folder}', 'ProjectController@delete_folder_sub_tahapan');
Route::post('edit-tahapan-proyek/{id_tahapan}', 'ProjectController@edit_tahapan_proyek');
Route::get('test/{tahun}', 'ProjectController@download_kalender_mingguan_proyek');

// ARSIP
Route::get('list-file-arsip', 'ArsipController@list_file_arsip');											// just template
Route::get('download-file/{id}', 'ArsipController@download_file');											//
Route::get('list-tahun-arsip', 'ArsipController@list_tahun_arsip');											//
Route::get('list-file-tahun-arsip/{tahun}', 'ArsipController@list_file_tahun_arsip');						//
Route::get('list-file-arsip/{id_folder}', 'ArsipController@list_file_arsip');
Route::get('list-arsip-tahapan-proyek/{id_folder_proyek}', 'ArsipController@list_arsip_tahapan_proyek');	//
Route::get('delete-file-arsip/{id_file}', 'ArsipController@delete_file_arsip');
Route::get('delete-folder-arsip/{id_folder}', 'ArsipController@delete_folder_arsip');
Route::get('breadcrumb/{id_folder}', 'ArsipController@breadcrumb');
Route::get('panggilbreadcrumb/{id_folder}', 'ArsipController@panggilbreadcrumb');
Route::post('tambah-tahun-arsip', 'ArsipController@tambah_tahun_arsip');									//
Route::post('tambah-folder-dalam-tahun/{tahun}', 'ArsipController@tambah_folder_dalam_tahun');				//
Route::post('tambah-folder-arsip/{id_folder}', 'ArsipController@tambah_folder_arsip');
Route::post('upload-file-arsip/{id_folder}', 'ArsipController@upload_file_arsip');

// ANGGARAN
Route::get('report-anggaran-tahunan', 'AnggaranController@report_anggaran_tahunan');
Route::post('report-anggaran-tahunan', 'AnggaranController@save_input_anggaran_tahunan');
Route::post('edit-anggaran-tahunan', 'AnggaranController@save_edit_anggaran_tahunan');
Route::post('input-pencairan-anggaran', 'AnggaranController@save_input_pengeluaran');
Route::get('report-anggaran-bulanan/{tahun}', 'AnggaranController@report_anggaran_bulanan');
Route::get('report-anggaran-rinci/{tahun_anggaran}/{idbulan}', 'AnggaranController@report_anggaran_rinci');
Route::post('report-anggaran-rinci/{tahun_anggaran}/{idbulan}', 'AnggaranController@save_edit_pengeluaran');
Route::get('download-anggaran-rinci/{tahun_anggaran}/{idbulan}', 'AnggaranController@download_anggaran_rinci');
Route::get('download-anggaran-bulanan/{tahun_anggaran}', 'AnggaranController@download_anggaran_bulanan');
Route::get('download-anggaran-tahunan', 'AnggaranController@download_anggaran_tahunan');

// ISSUE
Route::get('list-issue', 'IssueController@list_issue');
Route::get('list-all-issue', 'IssueController@list_all_issue');
Route::post('input-issue', 'IssueController@save_input_issue');
Route::post('pencarian-issue', 'IssueController@cari_issue');
Route::get('edit-issue/{id}', 'IssueController@edit_issue');
Route::post('edit-issue/{id}', 'IssueController@save_edit_issue');

// PROFILE
Route::get('edit-profile', 'ProfileController@edit_profile');
Route::post('edit-profile', 'ProfileController@save_edit_profile');
Route::get('forgot-password', 'ProfileController@forgot_password');
Auth::routes();


// AUTH
Route::get('logout', 'Auth\LoginController@logout');
Route::get('autentikasi', 'ProfileController@halaman_autentikasi');
Route::post('forgot-password', 'ProfileController@forgot_password');
Route::post('reset-password', 'ProfileController@reset_password');

Route::get('autentikasi2', function() {
	return view('auth.login-register2');
});
Route::get('lupa-password', function() {
	return view('auth.form-lupa-password');
});

Route::get('download_pencairan/{type}', 'AnggaranController@downloadPencairan');



