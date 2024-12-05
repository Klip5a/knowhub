<template>
  <div>
    <h1>Users</h1>
    <ul>
      <li v-for="user in users" :key="user.id">
        {{ user.name }} - {{ user.email }}
      </li>
    </ul>
  </div>
</template>

<script>
import { ref, onMounted } from "vue";

export default {
  setup() {
    const users = ref([]);

    const fetchUsers = async () => {
      try {
        const response = await fetch("http://localhost:8080/index.php");
        users.value = await response.json();
      } catch (error) {
        console.error("Ошибка при получении данных:", error);
      }
    };

    onMounted(fetchUsers);

    return {
      users,
    };
  },
};
</script>
