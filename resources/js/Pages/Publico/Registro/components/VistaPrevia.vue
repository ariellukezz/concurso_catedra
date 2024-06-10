<template>
    <a-layout class="p-2" style="max-height: calc(100vh - 100px);">
      <a-row justify="center">
        <a-col :span="24">
          <div class="container">
            <div class="header">
              <a-avatar size="large" src="profile.jpg" />
              <div style="margin-left: 20px;">
                <h1>John Doe</h1>
                <p>Email: john.doe@example.com | Phone: (123) 456-7890</p>
                <p>LinkedIn: <a href="https://linkedin.com/in/johndoe" target="_blank">linkedin.com/in/johndoe</a></p>
              </div>
            </div>
            <div class="section summary">
              <h2>Summary</h2>
              <p>Experienced professional with a background in [Your Industry]. Proven track record in [Your Key Skills]. Seeking to leverage expertise in [Your Goal] to contribute to [Company/Organization].</p>
            </div>
            <div class="section skills">
              <h2>Skills</h2>
              <a-list item-layout="horizontal" :data-source="skills">
                <template #renderItem="{ item }">
                  <a-list-item>{{ item }}</a-list-item>
                </template>
              </a-list>
            </div>
            <div class="section experience">
              <h2>Experience</h2>
              <a-list item-layout="horizontal" :data-source="experience">
                <template #renderItem="{ item }">
                  <a-list-item>
                    <a-list-item-meta
                      :title="item.jobTitle"
                      :description="`${item.company} | ${item.dates}`"
                    />
                    <p>{{ item.description }}</p>
                  </a-list-item>
                </template>
              </a-list>
            </div>
            <div class="section education">
              <h2>Education</h2>
              <a-list item-layout="horizontal" :data-source="education">
                <template #renderItem="{ item }">
                  <a-list-item>
                    <a-list-item-meta
                      :title="item.degree"
                      :description="`${item.institution} | ${item.dates}`"
                    />
                  </a-list-item>
                </template>
              </a-list>
            </div>
            <div class="section references">
              <h2>References</h2>
              <a-list item-layout="horizontal" :data-source="references">
                <template #renderItem="{ item }">
                  <a-list-item>{{ item }}</a-list-item>
                </template>
              </a-list>
            </div>
          </div>
        </a-col>
      </a-row>
    </a-layout>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { Avatar, Layout, Row, Col, List } from 'ant-design-vue';
  
  const skills = ref(['Skill 1', 'Skill 2', 'Skill 3', 'Skill 4']);
  const experience = ref([
    {
      jobTitle: 'Job Title 1',
      company: 'Company Name 1',
      dates: 'Dates of Employment 1',
      description: 'Brief description of responsibilities and achievements.',
    },
    {
      jobTitle: 'Job Title 2',
      company: 'Company Name 2',
      dates: 'Dates of Employment 2',
      description: 'Brief description of responsibilities and achievements.',
    },
  ]);
  const education = ref([
    {
      degree: 'Degree 1',
      institution: 'Institution Name 1',
      dates: 'Dates of Attendance 1',
    },
    {
      degree: 'Degree 2',
      institution: 'Institution Name 2',
      dates: 'Dates of Attendance 2',
    },
  ]);
  const references = ref(['Name 1 - Contact Information', 'Name 2 - Contact Information']);
  </script>
  
  <style scoped>
  body {
    background-color: #f4f4f9;
    margin: 0;
    font-family: 'Arial', sans-serif;
  }
  .container {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .header {
    display: flex;
    align-items: center;
    border-bottom: 2px solid #ddd;
    padding-bottom: 20px;
    margin-bottom: 20px;
  }
  .header img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
  }
  .header h1 {
    margin: 0;
    font-size: 2em;
    color: #0073b1;
  }
  .header p {
    margin: 5px 0;
    color: #555;
  }
  .section {
    margin-bottom: 20px;
  }
  .section h2 {
    font-size: 1.5em;
    color: #0073b1;
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
    margin-top: 0;
  }
  .skills ul,
  .experience ul,
  .education ul,
  .references ul {
    list-style-type: none;
    padding: 0;
  }
  .skills li,
  .experience li,
  .education li,
  .references li {
    margin: 10px 0;
  }
  .experience .job-title,
  .education .degree {
    font-weight: bold;
  }
  .experience .company,
  .education .institution {
    color: #777;
  }
  .experience .date,
  .education .date {
    font-style: italic;
    color: #999;
  }
  .experience p,
  .education p {
    margin: 5px 0 0 0;
  }
  </style>
  