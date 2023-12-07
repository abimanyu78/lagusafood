<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Blog;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BlogResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BlogResource\RelationManagers;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        FileUpload::make('image')->image(),
                        TextInput::make('title')->required(),
                        TextInput::make('content')
                        ])
                    ->columns(2),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('image'),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('content')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }    
}



//Student

// namespace App\Filament\Resources;

// use Filament\Forms;
// use Filament\Tables;
// use App\Models\Student;
// use Filament\Resources\Form;
// use Filament\Resources\Table;
// use Filament\Resources\Resource;
// use Filament\Forms\Components\Card;
// use Filament\Forms\Components\Select;
// use Filament\Tables\Columns\TextColumn;
// use Filament\Forms\Components\TextInput;
// use Illuminate\Database\Eloquent\Builder;
// use App\Filament\Resources\StudentResource\Pages;
// use Illuminate\Database\Eloquent\SoftDeletingScope;
// use App\Filament\Resources\StudentResource\RelationManagers;

// class StudentResource extends Resource
// {
//     protected static ?string $model = Student::class;

//     protected static ?string $navigationIcon = 'heroicon-o-collection';

//     public static function form(Form $form): Form
//     {
//         return $form
//             ->schema([
//                 Card::make()
//                     ->schema([
//                         TextInput::make('nim')->required()->unique(ignorable: fn($record) => $record),
//                         TextInput::make('nama')->required(),
//                         Select::make('fakultas')
//                             ->options([
//                                 'MIPA'=>'MIPA',
//                                 'FEBI'=>'FEBI',
//                                 'SOSHUM'=>'SOSHUM'
//                             ]),
//                     ])
//                     ->columns(2),
//             ]);
//     }

//     public static function table(Table $table): Table
//     {
//         return $table
//             ->columns([
//                 TextColumn::make('nim')->sortable()->searchable(),
//                 TextColumn::make('nama')->sortable()->searchable(),
//                 TextColumn::make('fakultas')->sortable()->searchable(),
//             ])
//             ->filters([
//                 //
//             ])
//             ->actions([
//                 Tables\Actions\EditAction::make(),
//                 Tables\Actions\DeleteAction::make(),
//             ])
//             ->bulkActions([
//                 Tables\Actions\DeleteBulkAction::make(),
//             ]);
//     }
    
//     public static function getRelations(): array
//     {
//         return [
//             //
//         ];
//     }
    
//     public static function getPages(): array
//     {
//         return [
//             'index' => Pages\ListStudents::route('/'),
//             'create' => Pages\CreateStudent::route('/create'),
//             'edit' => Pages\EditStudent::route('/{record}/edit'),
//         ];
//     }    
// }
