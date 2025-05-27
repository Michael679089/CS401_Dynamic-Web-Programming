# Hello welcome to my C401_Dynamic Programming Github Repo Folder



current submodules (github repos):
1. C401_week 4:
github url: https://github.com/Michael679089/C401_week-4

------

If `week 4_w3 update` is a submodule, the **files physically exist inside the `week 4_w3 update` folder on your local machine**, just like any other folder. However:
- **In your main repository:**  
  Only a reference (a pointer to a specific commit in the submodule’s repository) is stored, not the actual files.
- **When someone clones your main repo:**  
  The `week 4_w3 update` folder will be empty until they run:
  ```bash
  git submodule update --init --recursive
  ```
  This command fetches the files from the submodule’s repository into the folder.
**Summary:**  
- The files live in the `week 4_w3 update` folder locally.
- In the main repo, only a reference is tracked, not the files themselves.
- To get the files, others must initialize and update the submodule after cloning.