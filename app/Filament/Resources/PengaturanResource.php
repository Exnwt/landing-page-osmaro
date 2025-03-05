<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengaturanResource\Pages;
use App\Filament\Resources\PengaturanResource\RelationManagers;
use App\Models\Pengaturan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengaturanResource extends Resource
{
    protected static ?string $model = Pengaturan::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('label'),
                Tables\Columns\TextColumn::make('value')
                ->limit(40),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->form(function (Pengaturan $record){
                    switch($record->type){
                        case 'text':
                            return[Forms\Components\TextInput::make('value')
                        ->label($record->label)];
                            break;
                    }
                }),
                //Tables\Actions\DeleteAction::make(),
            ]);
           // ->bulkActions([
                //Tables\Actions\BulkActionGroup::make([
                    //Tables\Actions\DeleteBulkAction::make(),
               // ]),
            //]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePengaturans::route('/'),
        ];
    }
}
