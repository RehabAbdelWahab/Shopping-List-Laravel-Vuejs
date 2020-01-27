@extends('layouts.app')

@section('content')
   
     <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card" style="padding:20px; border:solid 1px black;">
           <div id="shoppingList">
           <div class="header">
            <h1>@{{ header.toLocaleUpperCase() }}</h1>
            <button v-if="state==='default'" class="btn btn-success" @click="changeState('edit')">Add Item</button>
            <button v-else class="btn btn-danger"  @click="changeState('default')">Cancel</button>
           </div>
           <div v-if="state==='edit'">
           <input class="input-form" type="text" v-model="newItem" v-on:keyup.enter="saveItem" type="text" placeholder="add new item">
           <button v-on:click="saveItem" v-bind:disabled="newItem.length===0" class="btn btn-primary">Save Item</button>
           <ul>
               <li  v-for="item in items" :class="{'red' : item.flag}"> @{{ item.name }}</li>
           </ul>
        </div>
           </div>
        </div>
        </div>
    </div>
 
@endsection
