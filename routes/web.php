<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactFormSectionController;
use App\Http\Controllers\ContactSectionController;
use App\Http\Controllers\ExperienceSectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectSectionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/admin',[AdminController::class,'adminDashboard'])->name('admin');


// Home_Section


Route::get('/admin/view/home',[HomeController::class,'ViewHomeSection'])->name('admin.view.home');

Route::get('/admin/add/home',[HomeController::class,'AddHomeSection'])->name('admin.add.home');

Route::post('/admin/store/home',[HomeController::class,'StoreHomeSection'])->name('admin.store.home');

Route::get('/admin/edit/home/{id}',[HomeController::class,'EditHomeSection'])->name('admin.edit.home');

Route::put('/admin/update/home/{id}',[HomeController::class,'UpdateHomeSection'])->name('admin.update.home');

Route::get('/admin/delete/home/{id}',[HomeController::class,'DeleteHomeSection'])->name('admin.delete.home');

Route::get('/admin/view/home',[HomeController::class,'ViewHomeSection'])->name('admin.view.home');


// About_Section


Route::get('/admin/view/about',[AboutSectionController::class,'ViewAboutSection'])->name('admin.view.about');

Route::get('/admin/add/about',[AboutSectionController::class,'AddAboutSection'])->name('admin.add.about');

Route::post('/admin/store/about',[AboutSectionController::class,'StoreAboutSection'])->name('admin.store.about');

Route::get('/admin/edit/about/{id}',[AboutSectionController::class,'EditAboutSection'])->name('admin.edit.about');

Route::put('/admin/update/about/{id}',[AboutSectionController::class,'UpdateAboutSection'])->name('admin.update.about');

Route::get('/admin/delete/about/{id}',[AboutSectionController::class,'DeleteAboutSection'])->name('admin.delete.about');


// Experience Section

Route::get('/admin/view/experience', [ExperienceSectionController::class, 'ViewExperienceSection'])->name('admin.view.experience');

Route::get('/admin/add/experience', [ExperienceSectionController::class, 'AddExperienceSection'])->name('admin.add.experience');

Route::post('/admin/store/experience', [ExperienceSectionController::class, 'StoreExperienceSection'])->name('admin.store.experience');

Route::get('/admin/edit/experience/{id}', [ExperienceSectionController::class, 'EditExperienceSection'])->name('admin.edit.experience');

Route::put('/admin/update/experience/{id}', [ExperienceSectionController::class, 'UpdateExperienceSection'])->name('admin.update.experience');

Route::get('/admin/delete/experience/{id}', [ExperienceSectionController::class, 'DeleteExperienceSection'])->name('admin.delete.experience');

// Project Section

Route::get('/admin/view/project', [ProjectSectionController::class, 'ViewProjectSection'])->name('admin.view.project');

Route::get('/admin/add/project', [ProjectSectionController::class, 'AddProjectSection'])->name('admin.add.project');

Route::post('/admin/store/project', [ProjectSectionController::class, 'StoreProjectSection'])->name('admin.store.project');

Route::get('/admin/Edit/project/{id}', [ProjectSectionController::class, 'EditProjectSection'])->name('admin.edit.project');

Route::put('/admin/update/project/{id}', [ProjectSectionController::class, 'UpdateProjectSection'])->name('admin.update.project');

Route::get('/admin/delete/project/{id}', [ProjectSectionController::class, 'DeleteProjectSection'])->name('admin.delete.project');

// Contact Section

Route::get('/admin/view/contact', [ContactSectionController::class, 'ViewContactSection'])->name('admin.view.contact');

Route::get('/admin/add/cantact', [ContactSectionController::class, 'AddContactSection'])->name('admin.add.contact');

Route::post('/admin/store/contact', [ContactSectionController::class, 'StoreContactSection'])->name('admin.store.contact');

Route::get('/admin/Edit/contact/{id}', [ContactSectionController::class, 'EditContactSection'])->name('admin.edit.contact');

Route::put('/admin/update/contact/{id}', [ContactSectionController::class, 'UpdateContactSection'])->name('admin.update.contact');

Route::get('/admin/delete/contact/{id}', [ContactSectionController::class, 'DeleteContactSection'])->name('admin.delete.contact');

// Contact Form Section

Route::get('/admin/view/contact/form', [ContactFormSectionController::class, 'ViewContactFormSection'])->name('admin.view.contact.form');

Route::post('/admin/store/contact/form', [ContactFormSectionController::class, 'StoreContactFormSection'])->name('admin.store.contact.form');

Route::get('/admin/delete/contact/form/{id}', [ContactFormSectionController::class, 'DeleteContactFormSection'])->name('admin.delete.contact.form');
