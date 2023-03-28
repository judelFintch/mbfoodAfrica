<div>
    <form wire:submit.prevent="create">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" wire:model="category.name" id="name" placeholder="Enter category name">
            @error('category.name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" wire:model="category.description" id="description" placeholder="Enter category description"></textarea>
            @error('category.description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <button wire:click="edit({{ $category->id }})" class="btn btn-primary">Edit</button>
                        <button wire:click="delete({{ $category->id }})" class="btn btn-danger">Delete</button
